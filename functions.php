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
 * @param $name
 * @param array $params
 * @param array $options
 * @return string
 */
function url($name, array $params = [], array $options = [])
{
    return Route::url($name, $params, $options);
}
