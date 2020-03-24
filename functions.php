<?php
/**
 *
 */

namespace Arc5;

use const Mvc5\{ CSRF_TOKEN, INDEX };

/**
 * @return string
 * @throws \Throwable
 */
function csrf_token() : string
{
    return Session::session(CSRF_TOKEN);
}

/**
 * @param string $name
 * @return array
 * @throws \Throwable
 */
function message($name = INDEX)
{
    return Message::message($name);
}

/**
 * @return \Mvc5\Session\SessionMessages
 * @throws \Throwable
 */
function messages()
{
    return Message::messages();
}

/**
 * @param array|null|string $route
 * @param array|string $query
 * @param string $fragment
 * @param array $options
 * @return string
 * @throws \Throwable
 */
function url($route, $query = '', $fragment = '', array $options = [])
{
    return Route::url($route, $query, $fragment, $options);
}
