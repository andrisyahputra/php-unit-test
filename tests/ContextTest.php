<?php

namespace andrisyahputra\Test;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class ContextTest extends TestCase
{
    public function testContext()
    {
        $logger = new Logger(LevelTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../aplication.php"));
        // file eror tidak semua ditampilkan hnya mulai dari eror

        $logger->info("Ini adalah eror", ["username" => "Andri"]);
        $logger->info("Ini adalah salah", ["username" => "Andri"]);
        $logger->info("Ini adalah salh lagi", ["username" => "Andri"]);

        self::assertNotNull($logger);
    }
}
