<?php

class Test {
    private int $count = 0;
    private static int $staticCount = 1;

    public function __construct() {
    }

    private const  MY_PI = 3.14;

    public function show(): void {
        echo $this->count;
        echo self::MY_PI;
        echo Test::MY_PI;
    }

    public static function staticShow(): void {
        echo Test::$staticCount;
    }

    public static function incrementStaticCount(): void {
        Test::$staticCount++;
    }
}
//
//$obj = new Test();
//$obj->show();
//Test::staticShow();
//Test::incrementStaticCount();
//Test::staticShow();
//$obj->incrementStaticCount();
//Test::staticShow();
//$obj->staticShow();