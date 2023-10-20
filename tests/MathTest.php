<?php

namespace andrisyahputra\Test;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    // test manual php unit tidak rekemoendasi
    public function testManual()
    {
        self::assertEquals(10, Math::sum([5, 5]));
        self::assertEquals(20, Math::sum([5, 5, 5, 5]));
        self::assertEquals(9, Math::sum([3, 3, 3]));
    }
    /* pakai data provider  */

    /**
     *@dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expetasi)
    {
        self::assertEquals($expetasi, Math::sum($values));
    }

    public function mathSumData(): array
    {
        return [
            [[5, 5], 10],
            [[4, 4, 4, 4, 4], 20],
            [[3, 3, 3], 9],
            [[], 0],
            [[2], 2],
        ];
    }

    // mengunakna manual salah satu salah bakal yg dibwah tidak dikerjakan 
    // gunakan data provider salah satu jalan yg bawah tetap jalankan

    // mengunakna testwith langsung
    /**
     * @testWith [[5, 5], 10]
     *      [[4, 4, 4, 4, 4], 20]
     *     [[3, 3, 3], 9]
     *     [[], 0]
     *     [[2], 2]
     */
    public function testWith(array $values, int $extepetasi)
    {
        self::assertEquals($extepetasi, Math::sum($values));
    }

    // lebih bagus data providers
}
