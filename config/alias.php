<?php
/**
 * Used with a class alias autoload function. E.g
 *
 * spl_autoload_register(new Mvc5\Service\Alias(include __DIR__ . '/config/alias.php'));
 */

return [
    'Config'   => Arc5\Config::class,
    'Log'      => Arc5\Log::class,
    'Message'  => Arc5\Message::class,
    'Request'  => Arc5\Request::class,
    'Response' => Arc5\Response::class,
    'Route'    => Arc5\Route::class,
    'Service'  => Arc5\Service::class,
    'Session'  => Arc5\Session::class,
    'View'     => Arc5\View::class,
];
