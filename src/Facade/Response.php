<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Http;
use Mvc5\Service\Facade;

trait Response
{
    /**
     *
     */
    use Facade;

    /**
     * @param $data
     * @param int $status
     * @param array $headers
     * @return \Mvc5\Response\JsonResponse
     */
    static function json($data, int $status = 200, array $headers = [])
    {
        return static::plugin('response\json', [$data, $status, $headers]);
    }

    /**
     * @param $url
     * @param int $status
     * @param array $headers
     * @param array $config
     * @return \Mvc5\Response\RedirectResponse
     */
    static function redirect($url, int $status = 302, array $headers = [], array $config = [])
    {
        return static::plugin('response\redirect', [$url, $status, $headers, $config]);
    }

    /**
     * @param null $body
     * @param int|null $status
     * @param array|Http\Headers $headers
     * @param array $config
     * @return \Mvc5\Response\Response
     */
    static function response($body = null, int $status = null, $headers = [], array $config = []) : Http\Response
    {
        return static::plugin('response', [$body, $status, $headers, $config]);
    }

    /**
     * @param Http\Request $request
     * @param Http\Response $response
     * @return Http\Response
     */
    static function status(Http\Request $request, Http\Response $response) : Http\Response
    {
        return static::call('response\status', [$request, $response]);
    }

    /**
     * @param Http\Response $response
     * @return Http\Response
     */
    static function send(Http\Response $response) : Http\Response
    {
        return static::call('response\send', [$response]);
    }

    /**
     * @param Http\Request $request
     * @param Http\Response $response
     * @return Http\Response
     */
    static function version(Http\Request $request, Http\Response $response) : Http\Response
    {
        return static::call('response\version', [$request, $response]);
    }
}
