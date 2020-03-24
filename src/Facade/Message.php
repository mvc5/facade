<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Service\Facade;
use Mvc5\Session\SessionMessages;

use const Mvc5\SESSION_MESSAGES;

trait Message
{
    /**
     *
     */
    use Facade;

    /**
     * @param array|string $message
     * @param string|null $name
     * @throws \Throwable
     */
    static function danger($message, string $name = null) : void
    {
        static::messages()->danger($message, $name);
    }

    /**
     * @param array|string $message
     * @param string|null $name
     * @throws \Throwable
     */
    static function info($message, string $name = null) : void
    {
        static::messages()->info($message, $name);
    }

    /**
     * @param array|string|null $name
     * @return array|null
     * @throws \Throwable
     */
    static function message($name = null)
    {
        return static::messages()->message($name);
    }

    /**
     * @return SessionMessages
     * @throws \Throwable
     */
    static function messages() : SessionMessages
    {
        return static::plugin(SESSION_MESSAGES);
    }

    /**
     * @param array|string $message
     * @param string|null $name
     * @throws \Throwable
     */
    static function success($message, string $name = null) : void
    {
        static::messages()->success($message, $name);
    }

    /**
     * @param array|string $message
     * @param string|null $name
     * @throws \Throwable
     */
    static function warning($message, string $name = null) : void
    {
        static::messages()->warning($message, $name);
    }
}
