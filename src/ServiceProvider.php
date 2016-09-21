<?php namespace Foothing\Laravel\PTracker;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function register() {
        $this->app->bind("Foothing\Laravel\PTracker\DriverInterface", "Foothing\Laravel\PTracker\LogDriver\LogDriver");
    }

}
