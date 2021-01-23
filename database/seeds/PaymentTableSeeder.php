<?php

use Illuminate\Database\Seeder;


class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $pay = factory(\App\Payment::class, 10)->make();
	
}
}
