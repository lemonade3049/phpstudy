<?php

class Saler {
    private int $count = 0;
    private static int $staticCount = 1;

    public function show(): void {
        echo $this->count;
    }

    public static function staticShow(): void {
        echo Saler::$staticCount;
    }
}

$obj = new Saler();
$obj->show();
Saler::staticShow();