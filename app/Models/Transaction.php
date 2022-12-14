<?php

namespace App\Models;

class Transaction
{
    private string $stockSymbol;
    private float $numberTraded;
    private float $exchange;
    private string $date;
    private int $owner;

    public function __construct(string $stockSymbol, float $numberTraded, float $exchange, string $date, int $owner)
    {
        $this->stockSymbol = $stockSymbol;
        $this->numberTraded = $numberTraded;
        $this->exchange = $exchange;
        $this->date = $date;
        $this->owner = $owner;
    }

    public function getStockSymbol(): string
    {
        return $this->stockSymbol;
    }

    public function getNumberTraded(): float
    {
        return $this->numberTraded;
    }

    public function getExchange(): float
    {
        return $this->exchange;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getOwner(): int
    {
        return $this->owner;
    }
}