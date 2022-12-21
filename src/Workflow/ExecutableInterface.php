<?php

namespace App\Workflow;

interface ExecutableInterface
{
    public function execute(): void;

    public function onEnter(): void;

    public function onExit(): void;

    public function onFail(): void;

    public function onSuccess(): void;
}
