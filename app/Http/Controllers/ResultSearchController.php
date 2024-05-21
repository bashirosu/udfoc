<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentExams;
use Illuminate\Http\Request;

class ResultSearchController extends Controller
{

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $students = Student::query()
            ->where('id', 'LIKE', "%{$search}%")
            ->orWhere('last_name', 'LIKE', "%{$search}%")
            ->get();

if($students->isNotEmpty()){

    $records  = StudentExams::query()->get();

}
 
        // Return the search view with the resluts compacted
        return view('search.view_search', compact('students', 'records'));
    }

    


    public function searchStudent(Request $request){
        // Get the search value from the request
        $search = $request->input('id');
    
        // Search in the title and body columns from the posts table
        $students = Student::find($search)
            ->where('id', 'LIKE', "%{$search}%")
            ->orWhere('student_id', 'LIKE', "%{$search}%")
            ->get();

if($students->isNotEmpty()){

    $records  = StudentExams::find($search);

}
 
        // Return the search view with the resluts compacted
        return view('search.view_search', compact('students', 'records'));
    }
    

}
