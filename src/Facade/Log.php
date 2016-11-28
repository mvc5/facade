<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Service\Facade;

trait Log
{
    /**
     *
     */
    use Facade;

    /**
     * @param $message
     * @param array $context
     * @param $level
     * @return mixed
     */
    static function log($message, array $context = [], $level = Arg::SEVERITY_CRITICAL)
    {
        return static::call(Arg::LOG, [Arg::LEVEL => $level, Arg::MESSAGE => $message, Arg::CONTEXT => $context]);
    }
}
