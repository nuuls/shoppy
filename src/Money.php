<?php

namespace gempir\shoppy;

class Money
{
    /**
     * @var int
     */
    private $integerCents;
    /**
     * @var Currency
     */
    private $currency;

    public static function fromParameters(int $integerCents, Currency $currency)
    {
        return new self($integerCents, $currency);
    }

    private function __construct(int $integerCents, Currency $currency)
    {
        $this->integerCents = $integerCents;
        $this->currency = $currency;
    }

    public function asCents(): int
    {
        return (int) $this->integerCents;
    }
}