<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class EnrollmentController extends Controller
{
    public function saveEnrollment(Request $request)
    {
        $student = Student::latest('id')->first();
        $id = $student->id;

        $schoolsArray = [];
        $schoolsArray = $request->input('schools');

        DB::table('enrollments')->insert([
            'school_id' => $schoolsArray,
            'student_id' => $id
        ]);

        return back()->with('student_add', 'Student added successfully');
    }
}
