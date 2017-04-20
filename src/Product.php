<?php

namespace gempir\shoppy;

class Product
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Money
     */
    private $netPrice;

    public static function fromParameters(string $name, Money $netPrice)
    {
        return new self($name, $netPrice);
    }

    private function __construct(string $name, Money $netPrice)
    {
        $this->name = $name;
        $this->netPrice = $netPrice;
    }

    public function __toString(): string
    {
        return (string) $this->name;
    }
}