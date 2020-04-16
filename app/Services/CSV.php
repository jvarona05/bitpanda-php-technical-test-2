<?php

namespace App\Services;

use App\Contracts\SourceProvider;
use App\Transaction;

class CSV implements SourceProvider
{
    public function getAll()
    {
        return ['hola excel'];
    }
}