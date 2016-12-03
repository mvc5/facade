<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Http\Request as HttpRequest;
use Mvc5\Service\Facade;

trait Route
{
    /**
     *
     */
    use Facade;

    /**
     * @param HttpRequest $request
     * @return callable|mixed|null|object
     */
    static function dispatch(HttpRequest $request)
    {
        return static::call('route\dispatch', [Arg::REQUEST => $request]);
    }

    /**
     * @param HttpRequest $request
     * @return callable|mixed|null|object
     */
    static function error(HttpRequest $request)
    {
        return static::call('request\error', [Arg::REQUEST => $request]);
    }

    /**
     * @param null $name
     * @param array $params
     * @param array $options
     * @return string
     */
    static function url($name = null, array $params = [], array $options = [])
    {
        return static::call(Arg::URL, [$name, $params, $options]);
    }
}
