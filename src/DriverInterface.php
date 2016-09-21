<?php namespace Foothing\Laravel\PTracker;

use Illuminate\Support\Facades\Request;

interface DriverInterface {

    public function track(Request $request, $time);

}
