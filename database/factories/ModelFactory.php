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

$factory->define(App\Siswa::class, function(Faker\Generator $faker) {

    return [
        'id' => $faker->numberBetween(1),
        'nama' => $faker->name,
        'jenis_kelamin' => 'Laki Laki',
        'tanggal_lahir' => $faker->date(),
        'alamat' => $faker->address,
        'angkatan' => $faker->year,
        'nama_ayah' => $faker->firstNameMale,
        'pekerjaan_ayah' => $faker->jobTitle,
        'no_telp_ayah' => $faker->phoneNumber,
        'nama_ibu' => $faker->firstNameFemale,
        'pekerjaan_ibu' => $faker->jobTitle,
        'no_telp_ibu' => $faker->phoneNumber,
    ];
});
