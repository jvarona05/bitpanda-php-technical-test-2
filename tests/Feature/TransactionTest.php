<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tests\Utils\TransactionUtils;

class TransactionTest extends TestCase
{
    /** @test */
    public function get_all_transaction_from_db()
    {                
        $this->getJson(route('api.transactions', ['source' => 'db']))
            ->assertStatus(200)
            ->assertJsonCount(100, 'data')
            ->assertJsonStructure(TransactionUtils::$transactionStructure);
    }

    /** @test */
    public function get_all_transaction_from_csv()
    {                
        $this->getJson(route('api.transactions', ['source' => 'csv']))
            ->assertStatus(200)
            ->assertJsonCount(100, 'data')
            ->assertJsonStructure(TransactionUtils::$transactionStructure);
    }

    /** @test */
    public function get_an_error_if_an_invalid_source_value_is_sent()
    {                
        $this->getJson(route('api.transactions', ['source' => 'invalid source']))
            ->assertStatus(422)
            ->assertJsonFragment([
                'errors' => [
                    'source' => ['The selected source is invalid.']
                ]
            ]);
    }
}
