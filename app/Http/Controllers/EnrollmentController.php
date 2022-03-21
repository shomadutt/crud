<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use App\Models\School;


class EnrollmentController extends Controller
{


    public function saveEnrollment(Request $request)
    {

        $student = DB::table('students')->latest('id')->first();
        $id = $student->id;

        $schools = $request->input('schools');

        foreach ($schools as $school) {

            DB::table('enrollments')->insert([

                'school_id' => $school,
                'student_id' => $id
            ]);
        }

        return back()->with('student_add', 'Student added successfully');
    }
}
