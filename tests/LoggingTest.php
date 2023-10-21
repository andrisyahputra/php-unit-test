<?php

namespace andrisyahputra\Test;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class LoggingTest extends TestCase
{
    public function testLog()
    {
        $log = new Logger(HandlerTest::class);
        // $log->pushHandler(new StreamHandler("php://stderr"));
        $log->pushHandler(new StreamHandler(__DIR__ . "tescoba.php"));
        $log->info("Belajar Logging");
        $log->info("Belajar Logging php");
        $log->info("Belajar Logging php 4");
        // $log = new Logger('2');
        // $log->pushHandler(new StreamHandler(__DIR__ . "/1.php"));
        // $log->info("Belajar Logging");
        // $log->info("Belajar Logging php");
        // $log->info("Belajar Logging php 2");

        self::assertNotNull($log);
    }
}
