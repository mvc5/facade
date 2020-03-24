<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Service\Facade;

use const Mvc5\CONFIG;

trait Config
{
    /**
     *
     */
    use Facade
    {
        param as public;
    }

    /**
     * @return array|mixed
     * @throws \Throwable
     */
    static function config()
    {
        return static::plugin(CONFIG);
    }
}
