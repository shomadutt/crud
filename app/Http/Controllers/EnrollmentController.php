<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use App\Models\School;


class EnrollmentController extends Controller
{


    public function schoolDropdown()
    {
        $schoolsArray = School::orderBy('school_name')->get()->toArray();
        return view('select-school', compact('schoolsArray'));
    }

    public function displayStudents(Request $request)
    {

        $selectedSchool = $request->schoolSelection;

        $enrollmentRecords = DB::table('enrollments')->where('school_id', $selectedSchool)->get('student_id')->toArray();

        $studentData = Student::find($enrollmentRecords);
        return view('display-students', compact('studentData'));
    }
}
