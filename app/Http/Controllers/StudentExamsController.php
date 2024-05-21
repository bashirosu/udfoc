<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ExamType;
use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentExams;
use App\Models\StudentGroup;
use Illuminate\Http\Request;
use App\Models\SchoolSubject;
use Barryvdh\DomPDF\Facade\Pdf;

class StudentExamsController extends Controller
{
    //

    public function ViewStudentList(){ 
        $data=   Student::get();
        //return $data;
    return view ('exams.register_student_exams', compact('data'));
        //return view ('backend.table', compact('data'));
        
       }   


       public function registerStudentExams($id){ 
        $years = StudentYear::all();
        $classes = StudentClass::all();
        $groups= StudentGroup::all();
        $examsTypes = ExamType::all();
        $subjects =SchoolSubject::all();

    $data = Student::where('id', $id)->first();
   // dd($data, $examsType,  $subject,$groups)->array;
return  view ('exams.record_student_exams', compact('data', 'groups', 'classes', 'years', 'examsTypes', 'subjects'));

        
       }   



       
       public function saveExamsResult($id){ 
        $years = StudentYear::all();
        $classes = StudentClass::all();
        $groups= StudentGroup::all();
        $examsType = ExamType::all();
        $subject =SchoolSubject::all();

    $data = Student::where('id', $id)->first();
   // dd($data, $examsType,  $subject,$groups)->array;
return  view ('exams.record_student_exams', compact('data', 'groups', 'classes', 'years', 'examsType', 'subject'));

        
       }   


 public function saveStudentExams(Request $request){

    //dd($request);
        $request->validate([
      'exams_year'=>'required',
      'exams_type'=>'required',
      'subject_name'=>'required',
    
        ]);
 $id_no=       $student_id =   $request->id; 
 
    $student_exams = new StudentExams(); 
   // $student_exams->$student_id =$student_id;
    //$student_exams->$id_no =$student_id;
    $student_exams->exams_year =  $request->exams_year;
    $student_exams->exams_type = $request->exams_type;   
    $student_exams->subject_name = $request->subject_name;
    $student_exams->subject_code="ALA101";
    $student_exams->exams_date = $request->exams_date;
    $student_exams->obtained_marks = $request->obtained_marks;
    $student_exams->grade = $request->grade;
  

    $student = Student::find( $student_id);
  //  dd($data, $student_exams)->array;
 $student->examsrecord()->save($student_exams);


    
    // the academics values belong to students table
    
    
   return redirect()->route('index')->with('success','Student Added Successfully');
    
    
        }
        





        public function viewRegisteredResult($student_id){ 
   
     $data = Student::where('id', $student_id)->first();
      $examsrecords =Student::with('examsrecord')->where('id', $student_id)->get(); 
   $singleStudent = StudentExams::find($student_id)->student;;

$students = StudentExams::select('exams_type', 'exams_year','subject_name', 'obtained_marks')->where('id', $student_id)->get()->all();
//dd( $examsrecords, $data);
// dd(  $singleStudent);
return  view ('exams.registered_result',compact('data',  'examsrecords','students'));
    
            
           }   




public function singleStudent($student_id){ 
       
 $singleStudent = StudentExams::find($student_id)->student;;
     
//$students = StudentExams::select('exams_type', 'exams_year','subject_name', 'obtained_marks')->where('id', $student_id)->get()->all();
     //dd( $examsrecords, $data);

     $examsrecordSingle =Student::find($student_id)->examsrecord;;
    //dd(  $singleStudent, $examsrecordSingle);
     //return  view ('exams.registered_result',compact('data',  'examsrecords','students'));

     return  view ('exams.registered_result',compact('singleStudent',  'examsrecordSingle'));
         
                 
                }   
     




      public function printPdf($student_id){ 

       $singleStudent = StudentExams::find($student_id)->student;;
   
   //$students = StudentExams::select('exams_type', 'exams_year','subject_name', 'obtained_marks')->where('id', $student_id)->get()->all();
   //dd( $examsrecords, $data);

       $examsrecordSingle =Student::find($student_id)->examsrecord;;
  //dd(  $singleStudent, $examsrecordSingle, $student_id);
   //return  view ('exams.registered_result',compact('data',  'examsrecords','students'));

  //Good one under production colored
  //$pdf = Pdf::loadView('backend.report.marksheet.transcript_design_pdf', compact( 'allMarks','allGrades' ))->setPaper('a4')->setOption([
  
   $pdf = Pdf::loadView('reports.transcript_design_pdf', compact('singleStudent',  'examsrecordSingle'))->setPaper('a4')->setOption([
   //The ending/closing of all above pdf report codes
'tempDir'=>public_path(), 'chroot'=>public_path(),]);

//dd($pdf);
return $pdf->download('marksheet_laravel_pdf.pdf');
  
 //return  view ('exams.print_pdf_records',compact('singleStudent',  'examsrecordSingle'));
         
     
 

  
  //Good one under production colored
//$pdf = Pdf::loadView('backend.report.marksheet.transcript_design_pdf', compact( 'allMarks','allGrades' ))->setPaper('a4')->setOption([
    
      //not working correctly
     // $pdf = Pdf::loadView('backend.report.marksheet.marksheet_pdf', compact( 'allMarks','allGrades', 'count_fail'))->setPaper('a4')->setOption([
     
      //The ending/closing of all above pdf report codes
   //'tempDir'=>public_path(),
   //'chroot'=>public_path(),]);
  //return $pdf->download('marksheet_laravel_pdf.pdf');
  





               }   
   
          

}
