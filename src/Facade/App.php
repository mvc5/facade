<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Service\Facade;
use Throwable;

use const Mvc5\{ EXCEPTION, EXCEPTION_RESPONSE, HTTP_MIDDLEWARE, WEB };

trait App
{
    /**
     *
     */
    use Facade;

    /**
     * @param Throwable $exception
     * @return mixed
     * @throws Throwable
     */
    static function exception(Throwable $exception)
    {
        return static::call(EXCEPTION_RESPONSE, [EXCEPTION => $exception]);
    }

    /**
     * @param array|mixed $config
     * @return mixed
     * @throws Throwable
     */
    static function middleware($config)
    {
        return Service::context($config)->call(HTTP_MIDDLEWARE);
    }

    /**
     * @param array|mixed $config
     * @return mixed
     * @throws Throwable
     */
    static function web($config)
    {
        return Service::context($config)->call(WEB);
    }
}
