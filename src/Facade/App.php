<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Http\Request as HttpRequest;
use Mvc5\Http\Response as HttpResponse;
use Mvc5\Service\Facade;

trait App
{
    /**
     *
     */
    use Facade;

    /**
     * @param \Exception|\Throwable $exception
     * @return callable|mixed|null|object
     */
    static function exception($exception)
    {
        return static::call(Arg::EXCEPTION_RESPONSE, [Arg::EXCEPTION => $exception]);
    }

    /**
     * @param array $config
     * @return callable|mixed|null|object
     */
    static function middleware($config)
    {
        return Service::context($config)->call('web\middleware');
    }

    /**
     * @param array $config
     * @return callable|mixed|null|object
     */
    static function web($config)
    {
        return Service::context($config)->call(Arg::WEB);
    }
}
