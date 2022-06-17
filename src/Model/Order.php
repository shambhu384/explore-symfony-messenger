<?php

namespace App\Model;

class Order
{
    public function __construct(
        private readonly string $uuid,
        private readonly string $name 
    ) {}

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getName(): string
    {
        return $this->name;
    }
}