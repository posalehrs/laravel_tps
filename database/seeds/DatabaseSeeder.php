<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CourseTableSeeder::class);
    }
}

class UserTableSeeder extends Seeder{
    public function run()
    {
        $faker = Faker::create();
        $userData=array();

        //Create admin
        $userData[]=array(
            'user_code'=>'T1',
            'name'=>$faker->text($maxNbChars = 10),
            'password'=>Hash::make(123),
            'email'=>$faker->email,
            'role'=>1
        );

        for ($i=2; $i <= 10; $i++) {
            $userData[]=array(
                'user_code'=>'T'.$i,
                'name'=>$faker->text($maxNbChars = 10),
                'password'=>Hash::make(123),
                'email'=>$faker->email,
                'role'=>0
            );
        }
        DB::table('Users')->insert($userData);
    }
}

class CourseTableSeeder extends Seeder{
    public function run()
    {
        $faker = Faker::create();
        $courseData=array();
        $count = 0;
        for ($i=1; $i <= 10; $i++) {
            for ($j=1; $j <=10 ; $j++) {
                $count = $count + 1;
                $courseData[] = array(
                    'course_code' => 'C'.$count,
                    'id_user' => $j,
                    'description' => $faker->text($maxNbChars = 100),
                    'start_date' => $faker->dateTimeThisYear(),
                    'end_date' => $faker->dateTimeThisYear()
                );
            }
        }
        DB::table('Courses')->insert($courseData);
    }
}