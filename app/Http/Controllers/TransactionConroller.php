<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionConroller extends Controller
{
    public function __invoke()
    {
        return Transaction::all();
    }
}
