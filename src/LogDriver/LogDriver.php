<?php namespace Foothing\Laravel\PTracker\LogDriver;

use Foothing\Laravel\PTracker\DriverInterface;
use Illuminate\Http\Request;

class LogDriver implements DriverInterface {

    public function track(Request $request, $time) {
        // @TODO Let's worry about config when
        // we'll have options to config. As of
        // now the publish, configure, etc.
        // process it's an overkill for this
        // tiny module.
        // In order to disable, just comment
        // the middleware.

        // if(config('ptracker.enabled')) {
            \Log::info("Request processed in $time");
        // }
    }
}
