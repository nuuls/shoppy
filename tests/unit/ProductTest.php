<?php

namespace gempir\shoppy;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testCanGetName()
    {
        $product = Product::fromParameters("Tape", Money::fromParameters(1000, Euro::create()));

        $this->assertSame("Tape", (string) $product);
    }
}
