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
     * @param string $message
     * @param string $name
     */
    static function danger($message, $name = Arg::INDEX)
    {
        static::messages()->danger($message, $name);
    }

    /**
     * @param string $message
     * @param string $name
     */
    static function info($message, $name = Arg::INDEX)
    {
        static::messages()->info($message, $name);
    }

    /**
     * @param $name
     * @return array
     */
    static function message($name = Arg::INDEX)
    {
        return static::messages()->message($name);
    }

    /**
     * @return SessionMessages
     */
    static function messages()
    {
        return static::plugin(Arg::SESSION_MESSAGES);
    }

    /**
     * @param string $message
     * @param string $name
     */
    static function success($message, $name = Arg::INDEX)
    {
        static::messages()->success($message, $name);
    }

    /**
     * @param string $message
     * @param string $name
     */
    static function warning($message, $name = Arg::INDEX)
    {
        static::messages()->warning($message, $name);
    }
}
