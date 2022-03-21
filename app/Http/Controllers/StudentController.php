<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\School;

class StudentController extends Controller
{
    public function addStudent()
    {
        $schools = School::orderBy('school_name')->get()->toArray();
        return view('add-student', compact('schools'));
    }

    public function saveStudent(Request $request)
    {
        DB::table('students')->insert([
            'name' => $request->name,
            'email_address' => $request->email_address
        ]);
        $studentID = DB::table('students')->get('id');
    }
}
