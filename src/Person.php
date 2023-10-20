<?php

namespace andrisyahputra\Test;

class Person
{
    public function __construct(private string $nama)
    {
    }
    public function sayHello(?string $nama)
    {
        if ($nama == null) throw new \Exception("Nama kosong");
        return "Hello $nama, nama saya adalah $this->nama";
    }

    public function sayGoodBye(?string $nama)
    {
        echo "Good Bye $nama";
    }
}
