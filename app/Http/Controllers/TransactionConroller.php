<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use App\Services\TransactionFactory;
use App\Http\Resources\TransactionResource;

/**
 * @group Transactions
 */
class TransactionConroller extends Controller
{
    /**
     * Get Transactions 
     * 
     * Returns users filtered by country and status.
     *  
     * @queryParam source required The source of the data(db or csv). Example: db
     * 
     * @param TransactionRequest $request
     *  
     * @return \Illuminate\Http\Response
     */
    public function __invoke(TransactionRequest $request, TransactionFactory $factory)
    {
        $transactions = $factory->make($request->source)->getAll();

        return TransactionResource::collection($transactions);
    }
}
