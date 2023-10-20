<?php

namespace andrisyahputra\Test;

use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase
{
    // jika mengunakan static
    public static Counter $counter;

    public static function setUpBeforeClass(): void
    {
        self::$counter = new Counter;
    }
    public function testPertama()
    {
        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounter());
    }
    public function testKedua()
    {
        self::$counter->increment();
        self::assertEquals(2, self::$counter->getCounter());
    }
}
