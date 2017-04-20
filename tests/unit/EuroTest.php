<?php

namespace gempir\shoppy;

use PHPUnit\Framework\TestCase;

class EuroTest extends TestCase
{
    public function testCanGetIsoCode()
    {
        $this->assertSame("EUR", (string) Euro::create());
    }
}
