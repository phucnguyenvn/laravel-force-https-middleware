# laravel-force-https-middleware

Laravel module which force all request to https protocol

## Installation
Installing via Composer
```bash
composer require phucnguyenvn/laravel-force-https-middleware
```

### Usage
To get started apply this middleware to every request adding setting the rule at **Kernel.php** file, like so:

Example:
```php
/**
 * The application's global HTTP middleware stack.
 *
 * These middleware are run during every request to your application.
 *
 * @var array
 */
protected $middleware = [
    \App\Http\Middleware\CheckForMaintenanceMode::class,
    \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
    \App\Http\Middleware\TrimStrings::class,
    \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    \App\Http\Middleware\TrustProxies::class,

    // Appending custom middleware 
    \phucnguyenvn\Http\Middleware\ForceHttps::class
];
```

Now the middleware will redirect every request to https if:

The current request comes with no secure protocol (http)
If your environment is equals to production.