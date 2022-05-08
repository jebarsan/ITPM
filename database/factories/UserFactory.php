<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;


$factory->define(User::class, function (Faker $faker) {
    $array = ['admin','doctor','patient','nurse','accountant','pharmacist','laboratorist','receptionist'];
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'national_id' => $faker->numberBetween(10000000000000,99999999999999),
        'address' => $faker->streetAddress,
        'email' => $faker->unique()->safeEmail,
        'password' => \Illuminate\Support\Facades\Hash::make($faker->password),
        'picture' => 'https://picsum.photos/id/'.$faker->numberBetween(1,999).'/200/200',
        'blood_group' => 'O+',
        'birth_date' => $faker->dateTime,
        'gender' => 'male',
        'type' => Arr::random($array),
        'phone' => $faker->numberBetween(1000000000,9999999999),
        'mobile' => $faker->numberBetween(1000000000,9999999999),
        'emergency' => $faker->numberBetween(1000000000,9999999999),
    ];
});
