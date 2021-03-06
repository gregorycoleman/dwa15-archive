<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StudentsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(CourseStudentTableSeeder::class);
    }
}
