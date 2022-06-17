<?php

namespace App\MessageHandler\Event;

use App\Message\OrderCreated;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(fromTransport: 'sync', bus: 'event.bus')]
final class OrderCreatedHandler
{
    public function __invoke(OrderCreated $message)
    {
        echo 'Order created';
    }
}
