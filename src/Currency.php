<?php

namespace gempir\shoppy;

interface Currency
{
    public static function create(): Currency;
    public function __toString(): string;
}