<?php namespace Foothing\Laravel\PTracker;

class Time {

    public static function start() {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }

    public static function tick($t0) {
        return self::get() - $t0;
    }

}
