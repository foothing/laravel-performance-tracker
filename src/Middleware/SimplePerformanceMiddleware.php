<?php namespace Foothing\Laravel\PTracker\Middleware;

use Foothing\Laravel\PTracker\DriverInterface;
use Foothing\Laravel\PTracker\Time;

class SimplePerformanceMiddleware {

    /**
     * @var \Foothing\PTracker\DriverInterface
     */
    protected $driver;

    public function __construct(DriverInterface $driver) {
        $this->driver = $driver;
    }

    public function handle($request, \Closure $next) {
        $t0 = Time::start();

        $response = $next($request);

        $this->driver->track($request, Time::tick($t0));

        return $response;
    }
}
