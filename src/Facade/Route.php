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
     * @return Request|mixed
     */
    static function dispatch(Request $request)
    {
        return static::call('route\dispatch', [$request]);
    }

    /**
     * @param Request $request
     * @return Request|mixed
     */
    static function error(Request $request)
    {
        return static::call('request\error', [$request]);
    }

    /**
     * @param string|string[]|\Mvc5\Http\Uri|null $route
     * @param array|string|null $query
     * @param string|null $fragment
     * @param array $options
     * @return string|null
     */
    static function url($route = null, $query = null, string $fragment = null, array $options = []) : ?string
    {
        return static::call(Arg::URL, [$route, $query, $fragment, $options]);
    }
}
