<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\User;
use Carbon\Carbon;

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

$factory->define(Post::class, function (Faker $faker) {
	$data = User::all()->count();
    return [
    	DB::table('posts')->insert([
		'user_id' => rand(1,3),
		'caption' => Str::random(10),        
        'image' => $faker->image('public/img',400,300)
    ])];
});
