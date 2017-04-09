<?php
/**
 *
 */

namespace Arc5;

use Mvc5\Arg;

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
