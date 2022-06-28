<?php

namespace App\Tracker;

class OrderCancellationTracker  implements TrackerInterface
{

    public function __invoke()
    {
        echo __CLASS__;
    }
}
