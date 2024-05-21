<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{


    public function ViewClass(){
        $data['allData']= StudentClass::all();
        return view('class.view_class', $data);


    }

    public function AddClass(){
      
        return view('class.add_class');


    }


    public function StoreClass(Request $request){
      //  $validator = Validator::make($request->all(), [
      //      'name' => 'required|unique:student_classes, name',
            
      //  ]);

        $validated = $request->validate([
            'class_name' => 'required|unique:student_classes',
            
        ]);

        $data = new StudentClass();
        $data->class_name = $request->class_name;
        $data->save();

        $notification = array('message'=>'Student Class Inserted Successfully',
                               'alert-type'=>'success'
                 );
    
        return redirect()->route('student.class.view')->with($notification);



    }

    public function EditClass($id){
        $editData = StudentClass::find($id);
        return view('class.edit_class', compact('editData'));


    }


    public function StudentClassDelete($id){
        $deletedata = StudentClass::find($id);
        $deletedata->delete();
        
        $notification = array('message'=>'Student Class Deleted Successfully',
                                   'alert-type'=>'info'
                     );
        
            return redirect()->route('student.class.view')->with($notification);
             }



             
public function  UpdateClass (Request $request, $id) {
    $data =  StudentClass::find($id);  

 //$validator = Validator::make($request->all(), [
//'name' => 'required|unique:student_classes,'.$data->$id,
     
//]);
//if ($validator->fails()) {
//return redirect()->back()->withErrors($validator)->withInput();
//}


$validatedData = $request->validate([
    'class_name' => 'required|unique:student_classes,class_name'.$data->$id
]);
       

    $data->class_name = $request->class_name;
             
    $data->save();

    $notification = array('message'=>'Class Updated Successfully',
                           'alert-type'=>'success'
             );

    return redirect()->route('student.class.view')->with($notification);
     }
     

}
