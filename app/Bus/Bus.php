<?php

namespace App\Bus;

class Bus {
    private $namespace = null;

    public function __constructor(string $namespace) {
        $this->namespace = $namespacve;
    }

    public function dispatch(ICommand $command) {
        $name = (new \ReflectionClass($command))->getShortName();
        $namespace = (new \ReflectionClass($command))->getNamespaceName();
        $handlerClass = "{$namespace}\\{$name}Handler";

        if (null != $this->namespace) {
            $handlerClass = "{$this->namespace}\\{$name}Handler";
        }

        $handler = app()->make($handlerClass);
        $handler->handle($command);
    }
}
