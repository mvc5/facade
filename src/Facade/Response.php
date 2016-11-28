<?php
/**
 *
 */

namespace Arc5\Facade;

use Mvc5\Arg;
use Mvc5\Http\Request as HttpRequest;
use Mvc5\Http\Response as HttpResponse;
use Mvc5\Response\Json;
use Mvc5\Response\Redirect;
use Mvc5\Response\Response as _Response;
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
     * @return Json
     */
    static function json($data, $status = 200, array $headers = [])
    {
        return static::plugin(Arg::RESPONSE_JSON, [$data, $status, $headers]);
    }

    /**
     * @param $url
     * @param int $status
     * @param array $headers
     * @param array $config
     * @return Redirect
     */
    static function redirect($url, $status = 302, array $headers = [], array $config = [])
    {
        return static::plugin(Arg::RESPONSE_REDIRECT, [$url, $status, $headers, $config]);
    }

    /**
     * @param null $body
     * @param string $status
     * @param array $headers
     * @param array $config
     * @@return _Response
     */
    static function response($body = null, $status = null, $headers = [], array $config = [])
    {
        return static::plugin(Arg::RESPONSE, [$body, $status, $headers, $config]);
    }

    /**
     * @param HttpRequest $request
     * @param HttpResponse $response
     * @return HttpResponse
     */
    static function status(HttpRequest $request, HttpResponse $response)
    {
        return static::call('response\status', [Arg::REQUEST => $request, Arg::RESPONSE => $response]);
    }

    /**
     * @param HttpResponse $response
     * @return HttpResponse
     */
    static function send(HttpResponse $response)
    {
        return static::call('response\send', [Arg::RESPONSE => $response]);
    }

    /**
     * @param HttpRequest $request
     * @param HttpResponse $response
     * @return HttpResponse
     */
    static function version(HttpRequest $request, HttpResponse $response)
    {
        return static::call('response\version', [Arg::REQUEST => $request, Arg::RESPONSE => $response]);
    }
}
