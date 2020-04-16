<?php

namespace App\Services;

use InvalidArgumentException;
use App\Contracts\SourceProvider;

class TransactionFactory
{
    public function make(string $type) : SourceProvider
    {
        switch ($type) {
            case 'db':
                return new DB;
            case 'csv':
                return new CSV;
            default:
                throw new InvalidArgumentException;
        }
    }
}