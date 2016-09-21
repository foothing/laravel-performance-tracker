<?php namespace Foothing\Laravel\PTracker\LogDriver;

use Foothing\PTracker\DriverInterface;
use Illuminate\Support\Facades\Request;

class LogDriver implements DriverInterface {

    public function track(Request $request, $time) {
        if(config('ptracker.enabled')) {
            \Log::info("Request processed in $time");
        }
    }
}
