<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Service\Facade;

trait Request
{
    /**
     *
     */
    use Facade;

    /**
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    static function arg(string $name, $default = null)
    {
        return static::request()->arg($name, $default);
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
     * @return string|mixed
     */
    static function clientAddress()
    {
        return static::request()->clientAddress();
    }

    /**
     * @return callable|mixed
     */
    static function controller()
    {
        return static::request()->controller();
    }

    /**
     * @param string $name
     * @return array|mixed
     */
    static function cookie(string $name)
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
     * @param string|null $name
     * @param mixed $default
     * @return array|mixed
     */
    static function data(string $name = null, $default = null)
    {
        return static::request()->data($name, $default);
    }

    /**
     * @return \Mvc5\Http\Error
     */
    static function error()
    {
        return static::request()->error();
    }

    /**
     * @return array|mixed
     */
    static function files()
    {
        return static::request()->files();
    }

    /**
     * @param string $name
     * @return array|string
     */
    static function header(string $name)
    {
        return static::request()->header($name);
    }

    /**
     * @return array|\Mvc5\Http\Headers
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
     * @param string $name
     * @param mixed $default
     * @return string|mixed
     */
    static function param(string $name, $default = null)
    {
        return static::request()->param($name, $default);
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
     * @return int|null
     */
    static function port()
    {
        return static::request()->port();
    }

    /**
     * @param string|null $name
     * @param mixed $default
     * @return array|mixed
     */
    static function post(string $name = null, $default = null)
    {
        return static::request()->post($name, $default);
    }

    /**
     * @return string
     */
    static function query()
    {
        return static::request()->query();
    }

    /**
     * @return \Mvc5\Request\Request
     */
    static function request()
    {
        return static::shared(Arg::REQUEST);
    }

    /**
     * @return \Mvc5\Route\Route
     */
    static function route()
    {
        return static::request()->route();
    }

    /**
     * @return string|string[]
     */
    static function scheme()
    {
        return static::request()->scheme();
    }

    /**
     * @param string|null $name
     * @param mixed $default
     * @return array|mixed
     */
    static function server(string $name = null, $default = null)
    {
        return static::request()->server($name, $default);
    }

    /**
     * @param string|null $name
     * @param mixed $default
     * @return array|\Mvc5\Session\Session|mixed
     */
    static function session(string $name = null, $default = null)
    {
        return static::request()->session($name, $default);
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
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    static function var(string $name, $default = null)
    {
        return static::request()->var($name, $default);
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
