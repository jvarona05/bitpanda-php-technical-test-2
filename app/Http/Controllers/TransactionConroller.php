<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TransactionFactory;

class TransactionConroller extends Controller
{
    public function __invoke(TransactionFactory $factory)
    {
        $transactions = $factory->make('db');

        return $transactions->getAll();
    }
}
