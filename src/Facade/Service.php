<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\App;
use Mvc5\Service\Context;
use Mvc5\Service\Facade;
use Mvc5\Service\Service as _Service;

trait Service
{
    /**
     *
     */
    use Facade
    {
        call as public;
        param as public;
        plugin as public;
        service as public;
        shared as public;
        trigger as public;
    }

    /**
     * @param _Service $service
     * @return callable|_Service
     */
    static function bind(_Service $service)
    {
        return Context::bind($service);
    }

    /**
     * @param array|\ArrayAccess $config
     * @param callable|null $provider
     * @param bool|object $scope
     * @return callable|_Service
     */
    static function context($config = [], callable $provider = null, $scope = true)
    {
        return static::bind(new App($config, $provider, $scope));
    }

    /**
     * @param string $name
     * @param array $args
     * @return mixed
     */
    static function __callStatic(string $name, array $args)
    {
        return static::service()->call($name, $args);
    }
}
