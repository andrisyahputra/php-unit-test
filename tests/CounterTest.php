<?php

namespace andrisyahputra\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter;
        echo "Membuat Counter" . PHP_EOL;
    }
    // setup selau di pangil ketika jalankan function test


    public function testCounter()
    {
        $this->counter->increment();
        $this->counter->increment();

        Assert::assertEquals(2, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertEquals(3, $this->counter->getCounter());

        $this->counter->increment();
        Self::assertEquals(4, $this->counter->getCounter());

        // menguynakan 3 cara
    }

    // bisa diangap unit test
    /** @test */
    public function todo()
    {
        Assert::assertEquals(0, $this->counter->getCounter());
        // jika belum selsai
        // maka jika di run akan dikasih tau bukan sekedar komentar
        self::markTestIncomplete("catatan ini counter belum selsai");
    }
    public function increment()
    {
        $this->counter->increment();

        Assert::assertEquals(1, $this->counter->getCounter());
    }

    // tanpa test ini tidak diangap unit test
    // public function increment()
    // {
    //     // assertions
    // }


    // melanjutkan dari sebelum kalau gagal tidak dilanjutkan
    public function testPertama(): Counter
    {

        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());

        return $this->counter;
    }

    /** @depends testPertama */
    public function testKedua(Counter $counter): void
    {
        $counter->increment();
        Assert::assertEquals(2, $counter->getCounter());
    }

    // tearDown
    // seperti after
    public function tearDown(): void
    {
        echo "Tear Down";
    }
    /**
     *@after
     */
    public function after(): void
    {
        echo "After";
    }
}
