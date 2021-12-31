<?php
use App\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = ["A", "B", "C"];


        for ($i = 0; $i < 100; $i++) {
            Student::create([
                'name' => rand(1,1000),
                'password' => random_int(10, 1000),
                'gender' => 'M',
                'gpa' => random_int(0, 4),
                'Group' => Arr::random($groups),
            ]);


        }
    }

}
