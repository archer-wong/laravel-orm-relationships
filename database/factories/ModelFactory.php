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
//示例 对应User模型
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

//创建一个UserAccount模型的工厂
$factory->define(App\Models\UserAccount::class, function (Faker\Generator $faker) {
    return [
        'qq' => rand(10000,999999999999),
        'weixin' => $faker->userName,
        'weibo' => $faker->word,
    ];
});

//同一个UserAccount模型，不同的工厂
$factory->defineAs(App\Models\UserAccount::class,'mark', function (Faker\Generator $faker) {
    return [
        'qq' => rand(10000,999999999999),
        'weixin' => $faker->userName,
        'weibo' => $faker->word,
        'mark' => 1,
    ];
});

//同一个UserAccount模型，不同的工厂,第二种写法
$factory->defineAs(App\Models\UserAccount::class,'mark2', function (Faker\Generator $faker) use($factory) {
    $user_account = $factory->raw(App\Models\UserAccount::class);
    return array_merge($user_account, ['mark' => 1]);
});
