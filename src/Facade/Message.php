<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Service\Facade;

trait Message
{
    /**
     *
     */
    use Facade;

    /**
     * @param array|string $message
     * @param string $name
     */
    static function danger($message, string $name = Arg::INDEX)
    {
        static::messages()->danger($message, $name);
    }

    /**
     * @param array|string $message
     * @param string $name
     */
    static function info($message, string $name = Arg::INDEX)
    {
        static::messages()->info($message, $name);
    }

    /**
     * @param $name
     * @return array|null
     */
    static function message(string $name = Arg::INDEX)
    {
        return static::messages()->message($name);
    }

    /**
     * @return \Mvc5\Session\SessionMessages
     */
    static function messages()
    {
        return static::plugin(Arg::SESSION_MESSAGES);
    }

    /**
     * @param array|string $message
     * @param string $name
     */
    static function success($message, string $name = Arg::INDEX)
    {
        static::messages()->success($message, $name);
    }

    /**
     * @param array|string $message
     * @param string $name
     */
    static function warning($message, string $name = Arg::INDEX)
    {
        static::messages()->warning($message, $name);
    }
}
