<?php

namespace App\TestCreateFlow;

use App\DTO\TestCreateDTO;
use App\Service\SomeService;
use App\Workflow\StepInterface;

class ValidateUserInputStep implements StepInterface
{
    private $someService;

    public function __construct(SomeService $someService)
    {
        $this->someService = $someService;
    }

    public function execute(TestCreateDTO $createDTO): void
    {

    }

    public function onEnter(): void
    {
        // TODO: Implement onEnter() method.
    }

    public function onExit(): void
    {
        // TODO: Implement onExit() method.
    }

    public function onFail(): void
    {
        // TODO: Implement onFail() method.
    }

    public function onSuccess(): void
    {
        // TODO: Implement onSuccess() method.
    }
}
