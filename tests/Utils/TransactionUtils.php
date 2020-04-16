<?php

namespace Tests\Utils;

class TransactionUtils
{
    static $transactionStructure = [
        'data' => [
            [
                'type',
                'attributes' => [
                    'code',
                    'amount',
                    'user_id',
                    'created_at'
                ],
                'id'
            ]
        ]
    ];
}

