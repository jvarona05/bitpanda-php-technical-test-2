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
     * Returns the transactions in a json with an extra parameter which will specify the source
     *  
     * @queryParam source required The source of the data(db or csv). Example: db
     * 
     * @param TransactionRequest $request
     * @param TransactionFactory $factory
     *  
     * @return \Illuminate\Http\Response
     */
    public function __invoke(TransactionRequest $request, TransactionFactory $factory)
    {
        $transactions = $factory->make($request->source)->getAll();

        return TransactionResource::collection($transactions);
    }
}
