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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Cats::class, function (Faker\Generator $faker) {
    static $password;

switch(rand(0,4)){

	case 0:
	$type="Long hair";
	break;
	case 1:
	$type="Short hair";
	break;
	case 2:
	$type="Persian";
	break;
	case 3:
	$type="Couch";
	break;
	case 4:
	$type="Red hat";
	break;
}

    return [
        'name' => $faker->firstname,
        'type' => $type,
        'age' => rand(0,15),
        'color' => $faker->safeColorName,
        'description' => $faker->text(200),
        'firstPhoto' => $faker->text(100),
    ];
});

$factory->define(App\Comments::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'cats_id' => function () {

        	return factory(App\Cats::class)->create()->id;

        },
        'user_id' => function () {

        	return factory(App\User::class)->create()->id;
        },
        'body' => $faker->text(100),
       
    ];
});