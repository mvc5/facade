## Arc5
[**https://mvc5.github.io**](https://mvc5.github.io)

Arc5 provides a set of static classes for the Mvc5 Framework. 

Example web application.

```php
use Arc5\App;
use Arc5\Request;
use Arc5\Response;
use Arc5\Route;
use Arc5\Service;
use Arc5\View;
use Mvc5\Arg;
use Mvc5\Http\Request as HttpRequest;
use Mvc5\Http\Response as HttpResponse;
use Mvc5\View\ViewModel;
use Mvc5\View\ViewLayout;

Service::context(include __DIR__ . '/../config/config.php');

try {

    $request  = Request::request();
    $response = Response::response();
    $result   = Route::dispatch($request);

    if ($result instanceof HttpRequest) {
        $request = Route::error($result);
        $result  = null;

        Service::service()[Arg::REQUEST] = $request;

        $controller = $request[Arg::CONTROLLER];

        $request = $request->with(Arg::USER, Service::plugin(Arg::USER));

        $controller && $result = Service::call(
            $controller, [Arg::REQUEST => $request, Arg::RESPONSE => $response]
        );
    }

    if ($result instanceof ViewModel) {
        !$result instanceof ViewLayout && ($layout = View::layout())
            && $result = $layout->withModel($result);

        $result = View::render($result);
    }

    ($result instanceof HttpResponse && $response = $result)
        || $response = $response->with(Arg::BODY, $result);

    $response = Response::status($request, $response);
    $response = Response::version($request, $response);
    Response::send($response);

}  catch(\Throwable $exception) {

    App::exception($exception);

}
```

#### Aliases
Short names can be used to alias class names by registering an alias autoload function and providing an alias configuration.

```php
spl_autoload_register(new Mvc5\Service\Alias(include __DIR__ . '/config/alias.php'));
```

When a class cannot be found by the default autoloader (i.e. composer) and it has an alias, the PHP class_alias method is called; which will call the autoload mechanism again if the aliased class does not already exist. Below is an example alias configuration.

```php
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
```

Example using aliases.

```php
use Response;
use View;

return Response::response(View::render('about/more'));
```

#### Mvc5 Framework Configuration
To use static classes within the Mvc5 Framework, the service context needs to be initialized during the web event or middleware stack. Each of the following should be added to their respective configurations.

```php
'service\context', //web event
'web\context', //middleware
```

The corresponding service configurations already exist in the Mvc5 service config.

```php
'service\context' => new Invoke(Mvc5\Service\Context::class, ['service' => new Link]),
'web\context'     => [Mvc5\Web\Context::class, new Link],
```

Arc5 automatically provides [functions](https://github.com/mvc5/facade/blob/master/functions.php) that can be imported into the [View5 Template Engine](https://github.com/mvc5/view). The following service configuration automatically imports these functions into each template.

```php
'view5\template' => [ViewTemplate::class, ['import' => ['arc5']]],
```

The functions currently provided are `message`, `messages` and `url`.
