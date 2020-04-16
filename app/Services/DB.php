<?php

namespace App\Services;

use Illuminate\Support\Collection;
use App\Contracts\SourceProvider;
use App\Transaction;

class DB implements SourceProvider
{
    public function getAll() : Collection
    {
        return Transaction::all();
    }
}