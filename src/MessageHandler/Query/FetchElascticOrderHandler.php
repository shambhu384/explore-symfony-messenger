<?php

namespace App\MessageHandler\Query;

use App\Model\Order;
use App\Message\FetchOrder;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(fromTransport: 'sync', bus: 'query.bus')]
final class FetchElascticOrderHandler
{
    public function __invoke(FetchOrder $message): Order
    {
        return new Order(Uuid::v4(), 'Apple 13 pro');
    }
}
