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
     * @return callable|mixed|null|object
     */
    static function exception(\Throwable $exception)
    {
        return static::call(Arg::EXCEPTION_RESPONSE, [Arg::EXCEPTION => $exception]);
    }

    /**
     * @param array|\ArrayAccess $config
     * @return callable|mixed|null|object
     */
    static function middleware($config)
    {
        return Service::context($config)->call(Arg::HTTP_MIDDLEWARE);
    }

    /**
     * @param array|\ArrayAccess $config
     * @return callable|mixed|null|object
     */
    static function web($config)
    {
        return Service::context($config)->call(Arg::WEB);
    }
}
