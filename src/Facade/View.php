<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Template\TemplateModel;
use Mvc5\Template\TemplateLayout;
use Mvc5\Service\Facade;

trait View
{
    /**
     *
     */
    use Facade;

    /**
     * @param array $vars
     * @param string $template
     * @param string $model
     * @return mixed|TemplateLayout
     */
    static function layout(array $vars = [], $template = null, $model = Arg::LAYOUT)
    {
        return static::plugin($model, array_filter([Arg::TEMPLATE => $template, Arg::VARS => $vars]));
    }

    /**
     * @param array $vars
     * @param null|string $template
     * @param string $model
     * @return mixed|TemplateModel
     */
    static function model(array $vars = [], $template = null, $model = Arg::VIEW_MODEL)
    {
        return static::plugin($model, [$template, $vars]);
    }

    /**
     * @param mixed|string $template
     * @param array $vars
     * @return string
     */
    static function render($template, array $vars = [])
    {
        return static::call(Arg::RENDER, [$template, $vars]);
    }

    /**
     * @param string $template
     * @param array $vars
     * @param string $model
     * @return mixed|TemplateModel
     */
    static function template($template = null, array $vars = [], $model = Arg::VIEW_MODEL)
    {
        return static::model($vars, $template, $model);
    }
}
