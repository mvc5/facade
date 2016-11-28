<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Service\Facade;

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
     *
     */
    static function config()
    {
        return static::plugin(Arg::CONFIG);
    }
}