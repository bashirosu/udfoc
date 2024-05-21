<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolSubject;

class SubjectController extends Controller
{

 
    public function ViewSubject(){

        $data['allData']= SchoolSubject::all();
        return view('subject.view_school_subjects', $data);
          
          }
      
          public function AddSubject(){
            
              return view('subject.add_school_subjects');
      
      
          }
      
      
      
          public function StoreSubject(Request $request){
              //  $validator = Validator::make($request->all(), [
              //      'name' => 'required|unique:student_classes, name',
                    
              //  ]);
        
                $validated = $request->validate([
                    'subject_code' => 'required|unique:student_subjects',
                    'subject_name' => 'required|unique:school_subjects',
                    
                ]);
        
                $data = new SchoolSubject();
                $data->subject_code = $request->subject_code;
                $data->subject_name = $request->subject_name;
                $data->save();
        
                $notification = array('message'=>'Student Group Inserted Successfully',
                                       'alert-type'=>'success'
                         );
            
                return redirect()->route('school.subject.view')->with($notification);
        
      
                
            }
 
            

            public function editSubject($id){
                $editData = SchoolSubject::find($id);
                return view('subject.edit_subject', compact('editData'));
        
        
            }
        

             
            public function  updateSubject(Request $request, $id) {
                $data =  SchoolSubject::find($id);  
            
                  
              if ($id==null){
                $validatedData = $request->validate([
                  'name' => 'required|unique:school_subjects,name'.$data->$id,
                 'subject_code' => 'required|unique:school_subjects,subject_code'.$data->$id,
             ]);
                      
              
               }
                  
                      $data->subject_name = $request->subject_name;
                      $data->subject_code = $request->subject_code;
                                
                      $data->save();
                  
                      $notification = array('message'=>'Subject Updated Successfully',
                                              'alert-type'=>'success'
                                );
                  
                      return redirect()->route('school.subject.view')->with($notification);
                        }
                               
                                       
            
            

}
