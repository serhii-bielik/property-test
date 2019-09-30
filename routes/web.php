<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Faker\Factory as Faker;

Route::get('/', function () {

    $items = \App\Property::select(['id', 'title'])
        ->orderBy('id', 'desc')
        ->limit(50)
        ->get();

    return view('welcome', ['items' => $items]);
});

Route::get('/property/add', function () {

    $faker = Faker::create();

    for ($i = 0; $i < 10; $i++) {
        $attributes = [
            'type_id' => $faker->numberBetween(1, 11),
            'status_id' => $faker->numberBetween(1, 2),
            'city_id' => $faker->numberBetween(1, 244),
            'is_active' => true,
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
            'address' => $faker->address,
            'latitude' => 41.4453839,
            'longitude' => 2.2483711,
            'small_photos' => ['https://media.yaencontre.com/img/photo/w380/real-estate/31480-PISALQ0305BCN/716817876-3.jpg',
                'https://media.yaencontre.com/img/photo/w380/real-estate/31480-PISALQ0305BCN/716817866-2.jpg'],
            'photos' => ['https://media.yaencontre.com/img/photo/w1024/real-estate/31480-PISALQ0305BCN/716817867-2.jpg',
                'https://media.yaencontre.com/img/photo/w1024/real-estate/31480-PISALQ0305BCN/710858777-2.jpg'],
            'price' => $faker->randomNumber(4),
            'discounted_price' => $faker->randomNumber(4),
            'area' => $faker->randomNumber(2),
            'rooms' => $faker->numberBetween(1, 5),
            'bathrooms' => $faker->numberBetween(1, 3),
            'car_slots' => $faker->numberBetween(0, 2),
        ];

        \App\Property::create($attributes);
    }

    dd($attributes);
});

Route::get('/property/{id}', function () {
    $property = \App\Property::where('id', request('id'))->first();
    return $property;
});
