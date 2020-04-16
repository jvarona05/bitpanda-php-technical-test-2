<?php

namespace App\Services;

use App\Contracts\SourceProvider;
use App\Transaction;

class CSV implements SourceProvider
{
    public function getAll()
    {
        $fname = storage_path('data/transactions.csv');
        
        if (!($fp = fopen($fname, 'r'))) {
            die("Can't open file...");
        }
        
        $key = fgetcsv($fp,"1024",",");
        
        $json = array();
            while ($row = fgetcsv($fp,"1024",",")) {
            $json[] = array_combine($key, $row);
        }
        
        fclose($fp);
        
        return json_encode($json);
    }
}