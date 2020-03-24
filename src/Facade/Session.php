<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Service\Facade;

use const Mvc5\SESSION;

trait Session
{
    /**
     *
     */
    use Facade;

    /**
     * @param array|string|null $name
     * @return \Mvc5\Session\Session|mixed
     * @throws \Throwable
     */
    static function session($name = null)
    {
        /** @var \Mvc5\Session\Session $session */
        return !($session = static::plugin(SESSION)) || null === $name ? $session : $session->get($name);
    }
}
