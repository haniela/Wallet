<?php

use Illuminate\Database\Seeder;
use App\Banque;
use App\Company;

class WalletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Wallet::class, 50)->create();
    }
}
