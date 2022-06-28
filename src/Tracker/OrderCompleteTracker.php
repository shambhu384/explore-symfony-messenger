<?php

namespace App\Tracker;

class OrderCompleteTracker implements TrackerInterface
{
    public function __invoke()
    {
        echo __CLASS__;
    }
}
