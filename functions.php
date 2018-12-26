<?php
/**
 *
 */

namespace Arc5;

use Mvc5\Arg;

/**
 * @return string
 */
function csrf_token() : string
{
    return Session::session(Arg::CSRF_TOKEN);
}

/**
 * @param string $name
 * @return array
 */
function message($name = Arg::INDEX)
{
    return Message::message($name);
}

/**
 * @return \Mvc5\Session\SessionMessages
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
 */
function url($route, $query = '', $fragment = '', array $options = [])
{
    return Route::url($route, $query, $fragment, $options);
}
