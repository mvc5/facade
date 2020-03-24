<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Http\Request;
use Mvc5\Service\Facade;

use const Mvc5\URL;

trait Route
{
    /**
     *
     */
    use Facade;

    /**
     * @param Request $request
     * @return Request|mixed
     * @throws \Throwable
     */
    static function dispatch(Request $request)
    {
        return static::call('route\dispatch', [$request]);
    }

    /**
     * @param Request $request
     * @return Request|mixed
     * @throws \Throwable
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
     * @throws \Throwable
     */
    static function url($route = null, $query = null, string $fragment = null, array $options = []) : ?string
    {
        return static::call(URL, [$route, $query, $fragment, $options]);
    }
}
