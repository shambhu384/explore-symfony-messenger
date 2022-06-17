<?php

namespace App\MessageHandler\Command;

use App\Message\OrderCreate;
use App\Message\OrderCreated;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Messenger\Stamp\DispatchAfterCurrentBusStamp;


#[AsMessageHandler(fromTransport: 'async', bus: 'command.bus')]
final class OrderCreateHandler
{   
    public function __construct(private MessageBusInterface $eventBus) {}

    public function __invoke(OrderCreate $message)
    {
        $this->eventBus->dispatch(
            (new Envelope(new OrderCreated()))
                ->with(new DispatchAfterCurrentBusStamp())
        );
    }
}