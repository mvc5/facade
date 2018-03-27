<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Service\Facade;
use Mvc5\Session\SessionMessages;

trait Message
{
    /**
     *
     */
    use Facade;

    /**
     * @param array|string $message
     * @param string|null $name
     */
    static function danger($message, string $name = null) : void
    {
        static::messages()->danger($message, $name);
    }

    /**
     * @param array|string $message
     * @param string|null $name
     */
    static function info($message, string $name = null) : void
    {
        static::messages()->info($message, $name);
    }

    /**
     * @param string|null $name
     * @return array|null
     */
    static function message(string $name = null)
    {
        return static::messages()->message($name);
    }

    /**
     * @return SessionMessages
     */
    static function messages() : SessionMessages
    {
        return static::plugin(Arg::SESSION_MESSAGES);
    }

    /**
     * @param array|string $message
     * @param string|null $name
     */
    static function success($message, string $name = null) : void
    {
        static::messages()->success($message, $name);
    }

    /**
     * @param array|string $message
     * @param string|null $name
     */
    static function warning($message, string $name = null) : void
    {
        static::messages()->warning($message, $name);
    }
}
