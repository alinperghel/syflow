<?php

namespace App\Workflow;

class WorkflowExecutionState
{
    /** @var mixed */
    private $subject;

    public function setSubject($subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getSubject()
    {
        return $this->subject;
    }

}
