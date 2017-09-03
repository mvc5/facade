<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Service\Facade;

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
     * @return \Mvc5\Template\TemplateLayout|mixed
     */
    static function layout(array $vars = [], string $template = null, string $model = Arg::LAYOUT)
    {
        return static::model($vars, $template, $model);
    }

    /**
     * @param array $vars
     * @param string|null $template
     * @param string $model
     * @return \Mvc5\Template\TemplateModel|mixed
     */
    static function model(array $vars = [], string $template = null, string $model = Arg::VIEW_MODEL)
    {
        $template && $vars[Arg::TEMPLATE_MODEL] = $template;

        return !$vars ? static::plugin($model) : static::plugin($model)->with($vars);
    }

    /**
     * @param array|string|\Mvc5\Template\TemplateModel $template
     * @param array $vars
     * @return string
     */
    static function render($template, array $vars = [])
    {
        return static::call(Arg::RENDER, [$template, $vars]);
    }

    /**
     * @param string|null $template
     * @param array $vars
     * @param string $model
     * @return \Mvc5\Template\TemplateModel|mixed
     */
    static function template(string $template = null, array $vars = [], string $model = Arg::VIEW_MODEL)
    {
        return static::model($vars, $template, $model);
    }
}
