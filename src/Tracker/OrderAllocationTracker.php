<?php

namespace App\Tracker;

class OrderAllocationTracker implements TrackerInterface
{
    public function __invoke()
    {
        echo __CLASS__;
    }
}
