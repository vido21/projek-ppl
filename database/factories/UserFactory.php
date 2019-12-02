<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => "user1",
        'email' => "user1@mail.com",
        'email_verified_at' => now(),
        'password' => bcrypt("user1"), // password
        'remember_token' => Str::random(10),
        'balance' => 99999999999.00 ,
    ];
});
