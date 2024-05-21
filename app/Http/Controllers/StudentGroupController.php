<?php

namespace App\Http\Controllers;

use App\Models\StudentGroup;
use Illuminate\Http\Request;

class StudentGroupController extends Controller
{


 
    public function ViewGroup(){

        $data['allData']= StudentGroup::all();
        return view('group.view_student_group', $data);
          
          }
      
          public function AddGroup(){
            
              return view('group.add_student_group');
      
      
          }
      
      
      
          public function StoreGroup(Request $request){
              //  $validator = Validator::make($request->all(), [
              //      'name' => 'required|unique:student_classes, name',
                    
              //  ]);
        
                $validated = $request->validate([
                    'group' => 'required|unique:student_groups',
                    
                ]);
        
                $data = new StudentGroup();
                $data->group = $request->group;
                $data->save();
        
                $notification = array('message'=>'Student Group Inserted Successfully',
                                       'alert-type'=>'success'
                         );
            
                return redirect()->route('student.group.view');
        
      
                
            }
      
            public function editGroup($id){
              $editData = StudentGroup::find($id);
              return view('group.edit_student_group', compact('editData'));
      
      
          }
      
      
      
          public function deleteGroup($id){
              $deletedata = StudentGroup::find($id);
              $deletedata->delete();
              
              $notification = array('message'=>'Student Group Deleted Successfully',
                                         'alert-type'=>'info'
                           );
              
                  return redirect()->route('student.group.view')->with($notification);
                   }
      
      
      
          public function  updateGroup (Request $request, $id) {
              $data =  StudentGroup::find($id);  
          
        
          $validatedData = $request->validate([
              'group' => 'required|unique:student_groups,group'.$data->$id
          ]);
                 
          
              $data->group = $request->group;
                       
              $data->save();
          
              $notification = array('message'=>'Student Year Updated Successfully',
                                     'alert-type'=>'success'
                       );
          
              return redirect()->route('student.group.view')->with($notification);
               }
               
      

}
