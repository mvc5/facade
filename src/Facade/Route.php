<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Http\Request as HttpRequest;
use Mvc5\Http\Uri;
use Mvc5\Service\Facade;

trait Route
{
    /**
     *
     */
    use Facade;

    /**
     * @param HttpRequest $request
     * @return mixed|HttpRequest
     */
    static function dispatch(HttpRequest $request)
    {
        return static::call('route\dispatch', [$request]);
    }

    /**
     * @param HttpRequest $request
     * @return mixed|HttpRequest
     */
    static function error(HttpRequest $request)
    {
        return static::call('request\error', [$request]);
    }

    /**
     * @param array|null|string|Uri $route
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
