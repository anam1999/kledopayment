<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Payment;
use Faker\Generator as Faker;

// protected $model = \App\Payment::class;

$factory->define(\App\Payment::class, function (Faker $faker) {
    return [
        //
          'payment_name' => $faker->text(50),
            
    ];
    $pay = factory(\App\Payment::class, 5)->create(); // insert 2 rows
});
