<?php

namespace App\MessageHandler\Event;

use App\Message\FetchOrder;
use App\Message\OrderCreated;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(fromTransport: 'sync', bus: 'event.bus')]
final class OrderCreatedRequestLogisticesHandler
{
    use HandleTrait;

    public function __construct(MessageBusInterface $queryBus) {
        $this->messageBus = $queryBus;
    }

    public function __invoke(OrderCreated $message)
    {
        $order = $this->handle(new FetchOrder());
        echo $order->getUuid();
    }
}