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
     * @param null|string|string[]|\Mvc5\Http\Uri $route
     * @param array|null|string $query
     * @param null|string $fragment
     * @param array $options
     * @return string
     */
    static function url($route = null, $query = null, string $fragment = null, array $options = [])
    {
        return static::call(Arg::URL, [$route, $query, $fragment, $options]);
    }
}
