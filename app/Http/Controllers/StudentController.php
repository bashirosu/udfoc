<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use Illuminate\Http\Request;
use App\Models\StudentProfile;

class StudentController extends Controller
{

  public function index(){

    $data=   Student::get();
    //return $data;
    return view ('student.student-list', compact('data'));
   
   }   

public function studentList(){ 
 $data=   Student::get();
 //return $data;
 return view ('student.student-list', compact('data'));

}   

public function addStudent(){

  $data['years']= StudentYear::all();
  $data['classes']= StudentClass::all();
  $data['groups']= StudentGroup::all();

return view ('student.add_student', $data);   
}

public function deleteStudent($id){
   Student::where('id', '=', $id)->delete();
   return redirect()->back()->with('success','Student Added Successfully');
    }
    

public function saveStudent(Request $request){
    $request->validate([
  'first_name'=>'required',
  'last_name'=>'required',
  'email'=>'required|email',

    ]);

   //$student = new Student;
   //dd($request->all());
 //  return view ('student.add_student');  
//  $first_name    =   $request->first_name;
//  $last_name     =   $request->last_name;
//  $username      =   $request->username;
//  $email         =   $request->email;
//  $academic_year =   $request->academic_year ;
//  $class         =   $request->class;
//  $group         =   $request->group;

//  $student= new Student();
//  $student->first_name =$first_name;
//  $student->last_name   =$last_name ;
//  $student->username   =$username;
//  $student->email     = $email;
//  $student->academic_year =$academic_year;
//  $student->class =$class;
//  $student->group =$group;

 
//  $student->save();
// If validation passes, you can proceed to save the data.
$student = new Student;
      
$student->first_name =  $request->first_name;
$student->last_name = $request->last_name;   
$student->email = $request->email;

$student->username = $request->username;
$student->usertype = $request->usertype;
$student->join_date = $request->join_date;

$student->academic_year = $request->academic_year;
$student-> class=$request->class;
$student-> group=$request->group;

$student->save();
$student_id = $student->id;

$studentprofile = new StudentProfile;
$studentprofile->student_id= $student_id;

$studentprofile->address = $request->address;
$studentprofile->city = $request->city;
$studentprofile->country = $request->country;

$studentprofile->mobile = $request->mobile;
$studentprofile->gender = $request->gender;
$studentprofile-> birth_date=$request->birth_date;

$studentprofile->guardian = $request->guardian;
$studentprofile->guardian_tel = $request->guardian_tel;

// the academics values belong to students table

$student->profile()->save( $studentprofile);

return redirect()->route('index')->with('success','Student Added Successfully');


    }
    


    public function updateStudent(Request $request){
        $request->validate([
      'first_name'=>'required',
      'last_name'=>'required',
      'email'=>'required|email',
    
        ]);

   //Get the ID
$id  =   $request->id;  

 // Get Student Model info          
$first_name =  $request->first_name;
$last_name = $request->last_name;   
$email = $request->email;

$username = $request->username;
$usertype = $request->usertype;
$join_date = $request->join_date;

$academic_year = $request->academic_year;
$class=$request->class;
$group=$request->group;

Student::where('id', '=', $id)->update([
  'first_name' => $first_name,
  'last_name' => $last_name ,
  'email' => $email,

  'username' =>$username,
  'usertype' =>$usertype,
  'join_date' =>$join_date,

'academic_year'  => $academic_year,
'class'=> $class,
'group'=> $group,
]);
 
 // Get StudentProfile Model info      

$address = $request->address;
$city = $request->city;
$country = $request->country;

$mobile = $request->mobile;
$gender = $request->gender;
$birth_date = $request->birth_date;

$guardian = $request->guardian;
$guardian_tel = $request->guardian_tel;

    StudentProfile::where('student_id', '=',  $request->id)->update([
   

     'address' => $address,
     'city' => $city,
     'country' => $country,

     'mobile' => $mobile,
     'gender' => $gender,
     'birth_date' => $birth_date,

     'guardian' =>$guardian,
     'guardian_tel' =>$guardian_tel,



    ]);
     

    
    return redirect()->route('index')->with('success','Student Updated Successfully');
    
        }
        






public function editStudent($id){
        //return "Add students";
        $years = StudentYear::all();
        $classes = StudentClass::all();
        $groups= StudentGroup::all();

        $data = Student::where('id', $id)->first();
 return  view ('student.edit_student', compact('data', 'groups', 'classes', 'years'));   
    }
        
}
