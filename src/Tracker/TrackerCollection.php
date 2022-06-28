<?php

namespace App\Tracker;

use Symfony\Component\DependencyInjection\Attribute\TaggedIterator;
use App\Tracker\TrackerInterface;

class TrackerCollection implements TrackerInterface
{
	public function __construct(
		#[TaggedIterator(TrackerInterface::class, exclude: self::class)]
		private iterable $trackers
	) {}

	public function __invoke($orderCreate)
	{
		foreach($this->trackers as $tracker) {
			$tracker($orderCreate);
		}
	}
}

