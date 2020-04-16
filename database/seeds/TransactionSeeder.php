<?php

class TransactionSeeder extends SeederBase
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = $this->loadData('transactions');

        DB::table('transactions')->insert($transactions);
    }
}
