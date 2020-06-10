<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      for($i = 0; $i < 100; $i++) {
          $name = $faker->name;
          $email = $faker->email;
          $password = $faker->password;
          App\User::create([
              'name' => $name,
              'email' => $email,
              'freelancer' => $faker->numberBetween(0,1),
              'password' => $password
          ]);
      }
    }
}
