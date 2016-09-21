<?php namespace Foothing\Laravel\PTracker;

use Illuminate\Http\Request;

interface DriverInterface {

    public function track(Request $request, $time);

}
