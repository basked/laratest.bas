<?php

use Modules\BasAjax\Entities\Contact; // bas module
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
     'name'=>$faker->name,
     'email'=>$faker->unique()->safeEmail,
    ];
});
