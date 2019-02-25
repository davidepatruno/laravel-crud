<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i <10 ; $i++) {
        $user = New User;
        $user->name = $faker->firstName;
        $user->lastname = $faker->lastName;
        $counter = rand(0,1);
        if($counter == 0){
          $gender = 'M';
        }
        else {
          $gender= 'F';
        };
        $user->gender = $gender;
        $user->age = rand(20,80);

        $user->save();
      }
    }
}
