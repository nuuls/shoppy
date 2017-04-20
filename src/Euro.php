<?php

namespace gempir\shoppy;

class Euro implements Currency
{
    const isoCode = "EUR";

    public static function create(): Currency
    {
        return new self();
    }

    private function __construct()
    {
    }

    public function __toString(): string
    {
        return (string) $this::isoCode;
    }
}