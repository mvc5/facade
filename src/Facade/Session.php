<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Session\Session as _Session;
use Mvc5\Service\Facade;

trait Session
{
    /**
     *
     */
    use Facade;

    /**
     * @param $name
     * @return _Session
     */
    static function session($name = null)
    {
        return !($session = static::plugin(Arg::SESSION)) || !$name ? $session : (
            is_array($session) ? (isset($session[$name]) ? $session[$name] : null) : $session->get($name)
        );
    }
}
