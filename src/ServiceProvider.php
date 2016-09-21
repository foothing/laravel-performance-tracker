<?php namespace Foothing\Laravel\PTracker;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function register() {
        $this->app->bind("Foothing\PTracker\DriverInterface", "Foothing\PTracker\LogDriver");
    }

}
