<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use App\Services\TransactionFactory;
use App\Http\Resources\TransactionResource;

class TransactionConroller extends Controller
{
    public function __invoke(TransactionRequest $request, TransactionFactory $factory)
    {
        $transactions = $factory->make($request->source)->getAll();

        return TransactionResource::collection($transactions);
    }
}
