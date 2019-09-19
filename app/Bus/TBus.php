<?php

namespace App\Bus;

trait TBus {
    private $namespace = 'App\Bus\Handlar';

    public function run(ICommand $command) {
        (new Bus($this->namespace))->dispatch($command);
    }
}
