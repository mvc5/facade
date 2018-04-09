<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Service\Facade;
use Mvc5\Template\TemplateLayout;
use Mvc5\Template\TemplateModel;

trait View
{
    /**
     *
     */
    use Facade;

    /**
     * @param array $vars
     * @param string|null $template
     * @param string $model
     * @return TemplateLayout|mixed
     * @throws \Throwable
     */
    static function layout(array $vars = [], string $template = null, string $model = Arg::LAYOUT) : TemplateLayout
    {
        return static::model($vars, $template, $model);
    }

    /**
     * @param array $vars
     * @param string|null $template
     * @param string $model
     * @return TemplateModel|mixed
     * @throws \Throwable
     */
    static function model(array $vars = [], string $template = null, string $model = Arg::VIEW_MODEL) : TemplateModel
    {
        $template && $vars[Arg::TEMPLATE_MODEL] = $template;

        return !$vars ? static::plugin($model) : static::plugin($model)->with($vars);
    }

    /**
     * @param array|string|\Mvc5\Template\TemplateModel $template
     * @param array $vars
     * @return string
     * @throws \Throwable
     */
    static function render($template, array $vars = []) : string
    {
        return static::call(Arg::RENDER, [$template, $vars]);
    }

    /**
     * @param string|null $template
     * @param array $vars
     * @param string $model
     * @return TemplateModel|mixed
     * @throws \Throwable
     */
    static function template(string $template = null, array $vars = [], string $model = Arg::VIEW_MODEL) : TemplateModel
    {
        return static::model($vars, $template, $model);
    }
}
