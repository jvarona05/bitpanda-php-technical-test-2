<?php

namespace App\Services;

use App\Contracts\SourceProvider;
use App\Transaction;

class DB implements SourceProvider
{
    public function getAll()
    {
        return Transaction::all();
    }
}