<?php

namespace App\Services;

use Illuminate\Support\Collection;
use App\Contracts\SourceProvider;
use App\Transaction;

class CSV implements SourceProvider
{
    public function getAll() : Collection
    {
        $fname = storage_path('data/transactions.csv');
        
        if (!($fp = fopen($fname, 'r'))) {
            die("Can't open file...");
        }
        
        $key = fgetcsv($fp,"1024",",");
        
        $transactions = collect();
        while ($row = fgetcsv($fp,"1024",",")) {
            $transactions->push(new Transaction(array_combine($key, $row)));
        }
        
        fclose($fp);
        
        return $transactions;
    }
}