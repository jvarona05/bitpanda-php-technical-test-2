<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Facades\Storage;

class TransactionConroller extends Controller
{
    public function __invoke()
    {
        return $file = Storage::get('transactions.csv');
        return Transaction::all();
    }
}
