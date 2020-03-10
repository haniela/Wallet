<?php

use App\Banque;
use Illuminate\Database\Seeder;

class BanqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Banque::class, 50)->create();
       /*  $param = Banque::create([
            'bank_name' => 'BCEAO'
        ]); */
    }
}
