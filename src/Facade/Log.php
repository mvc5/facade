<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Service\Facade;

use const Mvc5\{ CONTEXT, LEVEL, LOG, MESSAGE, SEVERITY_CRITICAL };

trait Log
{
    /**
     *
     */
    use Facade;

    /**
     * @param $message
     * @param array $context
     * @param int $level
     * @return mixed
     * @throws \Throwable
     */
    static function log($message, array $context = [], int $level = SEVERITY_CRITICAL)
    {
        return static::call(LOG, [LEVEL => $level, MESSAGE => $message, CONTEXT => $context]);
    }
}
