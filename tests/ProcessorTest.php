<?php

namespace andrisyahputra\Test;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\HostnameProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use PHPUnit\Framework\TestCase;

class ProcessorTest extends TestCase
{
    public function testProcessor()
    {
        $logger = new Logger(ProcessorTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../aplication.php"));
        $logger->pushProcessor(new MemoryUsageProcessor());
        $logger->pushProcessor(new HostnameProcessor());
        $logger->pushProcessor(function ($record) {
            // $record["extra"]["username"] = "andri";
            $record["extra"]["andri"] = [
                "app" => "andri syahputra",
                "author" => "andrimc",
            ];
            // var_dump($record);
            // isi record lengkap
            return $record;
        });
        $logger->info("test processor", ["username" => "Andri"]);
        $logger->info("test Lagi");
        $logger->info("test Lagi 2");
        $logger->info("test Lagi 3");
        self::assertNotNull($logger);
    }
}
