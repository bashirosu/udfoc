<?php

namespace App\Http\Controllers;

use App\Models\ExamType;
use Illuminate\Http\Request;

class ExamsTypeController extends Controller
{
  
    public function ViewExamType(){

        $data['allData']= ExamType::all();
        return view('exam_type.view_exam_type', $data);
          
          }


 public function AddExamType(){
      
 return view('exam_type.add_exam_type');
    
    
        }



        public function StoreExamType(Request $request){
            //  $validator = Validator::make($request->all(), [
            //      'name' => 'required|unique:student_classes, name',
                  
            //  ]);
      
              $validated = $request->validate([
                  'exam_name' => 'required|unique:exam_types',
                  
              ]);
      
              $data = new ExamType();
              $data->exam_name = $request->exam_name;
              $data->save();
      
              $notification = array('message'=>'Exam Type Inserted Successfully',
                                     'alert-type'=>'success'
                       );
          
              return redirect()->route('exam.type.view')->with($notification);
      
    
              
          }
    
          public function editExamType($id){
            $editData = ExamType::find($id);
            return view('exam_type.edit_exam_type', compact('editData'));
    
    
        }
    
    
    
        public function deleteExamType($id){
            $deletedata = ExamType::find($id);
            $deletedata->delete();
            
            $notification = array('message'=>'Exam Type Deleted Successfully',
                                       'alert-type'=>'info'
                         );
            
                return redirect()->route('exam.type.view')->with($notification);
                 }
    


    public function  updateExamType (Request $request, $id) {
            $data =  ExamType::find($id);  
        

        
        $validatedData = $request->validate([
            'exam_name' => 'required|unique:exam_types,exam_name'.$data->$id
        ]);
                
        
            $data->exam_name = $request->exam_name;
                        
            $data->save();
        
            $notification = array('message'=>'Exam Type Updated Successfully',
                                    'alert-type'=>'success'
                        );
        
            return redirect()->route('exam.type.view')->with($notification);
                }
                     
  

}
