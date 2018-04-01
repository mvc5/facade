<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Http;
use Mvc5\Route\Route;
use Mvc5\Service\Facade;

trait Request
{
    /**
     *
     */
    use Facade;

    /**
     * @param array|string $name
     * @param mixed $default
     * @return mixed
     */
    static function arg($name, $default = null)
    {
        return static::request()->arg($name, $default);
    }

    /**
     * @return array
     */
    static function args() : array
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
     * @return string|null
     */
    static function clientAddress() : ?string
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
     * @param array|string $name
     * @return array|mixed
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
     * @param array|string|null $name
     * @param mixed $default
     * @return array|mixed
     */
    static function data($name = null, $default = null)
    {
        return static::request()->data($name, $default);
    }

    /**
     * @return Http\Error|null
     */
    static function error() : ?Http\Error
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
     * @param array|string $name
     * @return array|string|null
     */
    static function header($name)
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
     * @return string|null
     */
    static function host() : ?string
    {
        return static::request()->host();
    }

    /**
     * @return bool
     */
    static function isPost() : bool
    {
        return static::request()->isPost();
    }

    /**
     * @return bool
     */
    static function isSecure() : bool
    {
        return static::request()->isSecure();
    }

    /**
     * @return bool
     */
    static function isXmlHttpRequest() : bool
    {
        return static::request()->isXmlHttpRequest();
    }

    /**
     * @return string|null
     */
    static function method() : ?string
    {
        return static::request()->method();
    }

    /**
     * @return string|null
     */
    static function name() : ?string
    {
        return static::request()->name();
    }

    /**
     * @param array|string $name
     * @param mixed $default
     * @return string|mixed
     */
    static function param($name, $default = null)
    {
        return static::request()->param($name, $default);
    }

    /**
     * @return array
     */
    static function params() : array
    {
        return static::request()->params();
    }

    /**
     * @return string|null
     */
    static function path() : ?string
    {
        return static::request()->path();
    }

    /**
     * @return int|null
     */
    static function port() : ?int
    {
        return static::request()->port();
    }

    /**
     * @param array|string|null $name
     * @param mixed $default
     * @return array|mixed
     */
    static function post($name = null, $default = null)
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
     * @return Http\Request|\Mvc5\Request\Request
     */
    static function request() : Http\Request
    {
        return static::shared(Arg::REQUEST);
    }

    /**
     * @return Route|null
     */
    static function route() : ?Route
    {
        return static::request()->route();
    }

    /**
     * @return string|null
     */
    static function scheme() : ?string
    {
        return static::request()->scheme();
    }

    /**
     * @param array|string|null $name
     * @param mixed $default
     * @return array|mixed
     */
    static function server($name = null, $default = null)
    {
        return static::request()->server($name, $default);
    }

    /**
     * @param array|string|null $name
     * @param mixed $default
     * @return array|\Mvc5\Session\Session|mixed
     */
    static function session($name = null, $default = null)
    {
        return static::request()->session($name, $default);
    }

    /**
     * @return string|Http\Uri|null
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
     * @return string|null
     */
    static function userAgent() : ?string
    {
        return static::request()->userAgent();
    }

    /**
     * @param array|string $name
     * @param mixed $default
     * @return mixed
     */
    static function var($name, $default = null)
    {
        return static::request()->var($name, $default);
    }

    /**
     * @return array
     */
    static function vars() : array
    {
        return static::request()->vars();
    }

    /**
     * @return string|null
     */
    static function version() : ?string
    {
        return static::request()->version();
    }
}
