<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Http\Request;
use Mvc5\Service\Facade;

trait Route
{
    /**
     *
     */
    use Facade;

    /**
     * @param Request $request
     * @return mixed|Request
     */
    static function dispatch(Request $request)
    {
        return static::call('route\dispatch', [$request]);
    }

    /**
     * @param Request $request
     * @return mixed|Request
     */
    static function error(Request $request)
    {
        return static::call('request\error', [$request]);
    }

    /**
     * @param array|null|string|\Mvc5\Http\Uri $route
     * @param array|string $query
     * @param string $fragment
     * @param array $options
     * @return string
     */
    static function url($route, $query = '', $fragment = '', array $options = [])
    {
        return static::call(Arg::URL, [$route, $query, $fragment, $options]);
    }
}
