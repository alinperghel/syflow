<?php

namespace App\Service;

use App\Exception\SomeException;

class SomeService
{
    /**
     * @throws SomeException
     */
    public function getSomeData(bool $simulateException): array
    {
        if ($simulateException) {
            throw new SomeException();
        }

        return [
            'foo' => 'bar',
        ];
    }
}
