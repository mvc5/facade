<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Http\Request as HttpRequest;
use Mvc5\Http\Response as HttpResponse;
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
    static function json($data, $status = 200, array $headers = [])
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
    static function redirect($url, $status = 302, array $headers = [], array $config = [])
    {
        return static::plugin('response\redirect', [$url, $status, $headers, $config]);
    }

    /**
     * @param null $body
     * @param string $status
     * @param array $headers
     * @param array $config
     * @@return \Mvc5\Response\Response
     */
    static function response($body = null, $status = null, $headers = [], array $config = [])
    {
        return static::plugin('response', [$body, $status, $headers, $config]);
    }

    /**
     * @param HttpRequest $request
     * @param HttpResponse $response
     * @return HttpResponse
     */
    static function status(HttpRequest $request, HttpResponse $response)
    {
        return static::call('response\status', [$request, $response]);
    }

    /**
     * @param HttpResponse $response
     * @return HttpResponse
     */
    static function send(HttpResponse $response)
    {
        return static::call('response\send', [$response]);
    }

    /**
     * @param HttpRequest $request
     * @param HttpResponse $response
     * @return HttpResponse
     */
    static function version(HttpRequest $request, HttpResponse $response)
    {
        return static::call('response\version', [$request, $response]);
    }
}
