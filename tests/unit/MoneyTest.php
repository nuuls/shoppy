<?php

namespace gempir\shoppy;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testCanGetCents()
    {
        $money = Money::fromParameters(100, Euro::create());

        $this->assertSame(100, $money->asCents());
    }
}
