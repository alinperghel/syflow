<?php

namespace App\Workflow;

class WorkflowEngine
{
    /**
     * @param ExecutableInterface[] $executables
     * @return void
     */
    public function configure(array $executables): void
    {
        foreach ($executables as $executable) {

            $executable->execute();
        }
    }
}
