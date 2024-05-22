<?php

namespace Database\Seeders;

use App\Models\Authorized;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Tutor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $totalStudents = 420;

    private $courses = [
        '1A', '1B', '1C', '2A', '2B', '2C',
        '3A', '3B', '3C', '4A', '4B', '4C',
        '5A', '5B', '5C', '6A', '6B', '6C',
        '7A', '7B', '7C',
    ];
    private $courses_id = [];

    public function run(): void
    {
        foreach ($this->courses as $courseDescription) {
            $course = Course::factory()->create(['description' => $courseDescription]);
            Teacher::factory()->create(['course_id' => $course->id]);
            $this->courses_id[] = $course->id;
        }

        Tutor::factory()->count($this->totalStudents)->create()->each(function ($tutor) {
            $authorized = Authorized::factory()->create(["tutor_id" => $tutor->id]);

            Student::factory()->create(['course_id' => $this->courseRandom(), 'tutor_id' => $tutor->id, 'authorized_id' => $authorized->id]);
        });
    }

    private function courseRandom()
    {
        $randomKey = array_rand($this->courses_id);
        return $this->courses_id[$randomKey];
    }
}
