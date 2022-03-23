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

        //error_log(print_r($selectedSchool));

        $enrollmentRecords = Enrollment::select(['student_id'])->where('school_id', $selectedSchool)->get()->toArray();

        // print "<pre>";
        // error_log(print_r($enrollmentRecords));
        // print "<pre>";

        $studentIDs = [];
        foreach ($enrollmentRecords as $record) {


            // error_log(print_r($record['student_id']));

            array_push($studentIDs, $record['student_id']);
        }

        // print "<pre>";
        // error_log(print_r($studentIDs));
        // print "<pre>";

        foreach ($studentIDs as $student) {
            // print " < pre > ";
            // error_log(print_r($student));
            // print " < pre > ";

            $studentData = Student::select('name', 'email_address')->where('id', $student)->get()->toArray();
        }

        // print "<pre>";
        // error_log(print_r($studentData));
        // print "<pre>";

        return view('display-students', compact('studentData'));
    }
}
