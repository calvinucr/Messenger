<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*
| User
*/
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/*
| Group
*/
$factory->define(App\Group::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->streetName,
    ];
});

/*
| Contact
*/
$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    return [
        'group_id' => $faker->randomElement(App\Group::pluck('id')->toArray()),
        'name' => $faker->streetName,
        'company' => $faker->company,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'city' => $faker->city,
    ];
});