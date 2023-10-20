<?php

namespace andrisyahputra\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;

    // melakukan setup diwal
    protected function setUp(): void
    {
    }

    // bisa juga mengunakan before sealin setup
    /**  @before */
    public function createPerson(): void
    {
        $this->person = new Person("Andri");
    }


    public function testSucces()
    {
        self::assertEquals("Hello budi, nama saya adalah Andri", $this->person->sayHello("budi"));
    }
    // ini hasil return nya jika benar 

    // iniuntuk mentahui eror di buat
    // ini keluar kan eror diangap sukses
    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    // test output yg benar
    public function testGoodBye()
    {
        $this->person->sayGoodBye("Eko");
        $this->expectOutputString("Good Bye Eko");
    }
}
