<?php

namespace Tests\Feature;

use App\Bus\Bus;
use App\Bus\ICommand;
use App\Bus\IHandler;
use Tests\TestCase;

class testCommandMessage {
    private static $message;

    public static function setMessage($message) {
        static::$message = $message;
    }

    public static function getMessage() {
        return static::$message;
    }
}

class Command implements ICommand {
    private $message = null;

    public function __construct($message) {
        $this->message = $message;
    }

    public function getMessage(): string {
        return $this->message;
    }

    public static function fromArray(array $arr) {
    }
}

class CommandHandler implements IHandler {
    public function handle(ICommand $command) {
        $message = $command->getMessage();
        testCommandMessage::setMessage($message);
    }
}

class testCommandBus extends TestCase {
    /**
     * A basic feature test example.
     */
    public function testExample() {
        testCommandMessage::setMessage(null);
        $message = 'test message';
        $command = new Command($message);
        $bus = new Bus('Tests\Feature');

        $bus->dispatch($command);
        $this->assertTrue(testCommandMessage::getMessage() == $message);
    }
}
