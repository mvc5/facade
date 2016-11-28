<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Http\Error;
use Mvc5\Request\Request as _Request;
use Mvc5\Service\Facade;

trait Request
{
    /**
     *
     */
    use Facade;

    /**
     * @param $name
     * @return mixed
     */
    static function arg($name)
    {
        return static::request()->arg($name);
    }

    /**
     * @return array
     */
    static function args()
    {
        return static::request()->args();
    }

    /**
     * @return mixed
     */
    static function body()
    {
        return static::request()->body();
    }

    /**
     * @return mixed
     */
    static function clientAddress()
    {
        return static::request()->clientAddress();
    }

    /**
     * @return mixed
     */
    static function contentType()
    {
        return static::request()->contentType();
    }

    /**
     * @return array|callable|null|object|string
     */
    static function controller()
    {
        return static::request()->controller();
    }

    /**
     * @param $name
     * @return array|\ArrayAccess
     */
    static function cookie($name)
    {
        return static::request()->cookie($name);
    }

    /**
     * @return array|\ArrayAccess
     */
    static function cookies()
    {
        return static::request()->cookies();
    }

    /**
     * @param $name
     * @return mixed
     */
    static function data($name = null)
    {
        return static::request()->data($name);
    }

    /**
     * @return Error
     */
    static function error()
    {
        return static::request()->error();
    }

    /**
     * @return array
     */
    static function files()
    {
        return static::request()->files();
    }

    /**
     * @param $name
     * @return string
     */
    static function header($name)
    {
        return static::request()->header($name);
    }

    /**
     * @return array
     */
    static function headers()
    {
        return static::request()->headers();
    }

    /**
     * @return string|string[]
     */
    static function host()
    {
        return static::request()->host();
    }

    /**
     * @return bool
     */
    static function isPost()
    {
        return static::request()->isPost();
    }

    /**
     * @return bool
     */
    static function isSecure()
    {
        return static::request()->isSecure();
    }

    /**
     * @return bool
     */
    static function isXmlHttpRequest()
    {
        return static::request()->isXmlHttpRequest();
    }

    /**
     * @return string
     */
    static function method()
    {
        return static::request()->method();
    }

    /**
     * @return string
     */
    static function name()
    {
        return static::request()->name();
    }

    /**
     * @param $name
     * @return mixed
     */
    static function param($name)
    {
        return static::request()->param($name);
    }

    /**
     * @return array
     */
    static function params()
    {
        return static::request()->params();
    }

    /**
     * @return string
     */
    static function path()
    {
        return static::request()->path();
    }

    /**
     * @return int|null|string
     */
    static function port()
    {
        return static::request()->port();
    }

    /**
     * @param $name
     * @return array
     */
    static function post($name = null)
    {
        return static::request()->post($name);
    }

    /**
     * @return string
     */
    static function query()
    {
        return static::request()->query();
    }

    /**
     * @return _Request
     */
    static function request()
    {
        return static::shared(Arg::REQUEST);
    }

    /**
     * @return string|string[]
     */
    static function scheme()
    {
        return static::request()->scheme();
    }

    /**
     * @param $name
     * @return array|\ArrayAccess
     */
    static function server($name = null)
    {
        return static::request()->server($name);
    }

    /**
     * @param $name
     * @return array|\ArrayAccess
     */
    static function session($name = null)
    {
        return static::request()->session($name);
    }

    /**
     * @return resource
     */
    static function stream()
    {
        return static::request()->stream();
    }

    /**
     * @return string
     */
    static function uri()
    {
        return static::request()->uri();
    }

    /**
     * @return mixed
     */
    static function user()
    {
        return static::request()->user();
    }

    /**
     * @return mixed
     */
    static function userAgent()
    {
        return static::request()->userAgent();
    }

    /**
     * @param $name
     * @return mixed
     */
    static function variable($name)
    {
        return static::request()->variable($name);
    }

    /**
     * @return array
     */
    static function vars()
    {
        return static::request()->vars();
    }

    /**
     * @return int
     */
    static function version()
    {
        return static::request()->version();
    }
}
