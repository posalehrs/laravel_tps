<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(TrainerTableSeeder::class);
        $this->call(ClassTableSeeder::class);
    }
}

class TrainerTableSeeder extends Seeder{
    public function run()
    {
        $faker = Faker::create();
        $trainerData=array();
        for ($i=1; $i <= 10; $i++) {
            $trainerData[]=array(
                'trainer_code'=>'T'.$i,
                'name'=>$faker->text($maxNbChars = 10),
                'password'=>$faker->password(6,10),
                'email'=>$faker->email
            );
        }
        DB::table('Trainer')->insert($trainerData);
    }
}

class ClassTableSeeder extends Seeder{
    public function run()
    {
        $faker = Faker::create();
        $classData=array();
        $count = 0;
        for ($i=1; $i <= 10; $i++) {
            for ($j=1; $j <=10 ; $j++) {
                $count = $count + 1;
                $classData[] = array(
                    'class_code' => 'C'.$count,
                    'id_trainer' => $j,
                    'description' => $faker->text($maxNbChars = 100),
                    'start_date' => $faker->dateTimeThisYear(),
                    'end_date' => $faker->dateTimeThisYear()
                );
            }
        }
        DB::table('Class')->insert($classData);
    }
}