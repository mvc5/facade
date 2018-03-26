<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Service\Facade;

trait Session
{
    /**
     *
     */
    use Facade;

    /**
     * @param array|string|null $name
     * @return \Mvc5\Session\Session|mixed
     */
    static function session($name = null)
    {
        /** @var \Mvc5\Session\Session $session */
        return !($session = static::plugin(Arg::SESSION)) || null === $name ? $session : $session->get($name);
    }
}
