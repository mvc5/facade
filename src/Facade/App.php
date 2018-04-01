<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Service\Facade;

trait App
{
    /**
     *
     */
    use Facade;

    /**
     * @param \Throwable $exception
     * @return mixed
     */
    static function exception(\Throwable $exception)
    {
        return static::call(Arg::EXCEPTION_RESPONSE, [Arg::EXCEPTION => $exception]);
    }

    /**
     * @param array|mixed $config
     * @return mixed
     * @throws \Throwable
     */
    static function middleware($config)
    {
        return Service::context($config)->call(Arg::HTTP_MIDDLEWARE);
    }

    /**
     * @param array|mixed $config
     * @return mixed
     * @throws \Throwable
     */
    static function web($config)
    {
        return Service::context($config)->call(Arg::WEB);
    }
}
