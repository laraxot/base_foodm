<?php

namespace App\Bus;

interface ICommand {
    public static function fromArray(array $arr);
}
