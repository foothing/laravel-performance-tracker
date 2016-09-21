# Laravel Performance Tracker

A simple Middleware to track pageload time for Laravel 5.

## Install and setup

Add composer dependency in `require` or `require-dev`

```json
"require": [
	"foothing/laravel-performance-tracker": "~0.1"
]
```

Add the service provider in your `config/app.php`

```php
'providers' => [
	// ...
	Foothing\Laravel\PTracker\ServiceProvider::class
]
```

Finally, enable Middleware in your `app/Http/Kernel.php`

```php
protected $middleware = [
	// ...
	\Foothing\Laravel\PTracker\Middleware\SimplePerformanceMiddleware::class
];
```

You're done. In this first implementation the page load time is
written to your logfile. Time is in seconds.

## License
MIT
