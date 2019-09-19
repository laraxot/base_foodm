<?php

namespace App\Bus;

interface IHandler {
    public function handle(ICommand $command);
}
