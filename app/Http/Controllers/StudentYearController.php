<?php

namespace App\Http\Controllers;

use App\Models\StudentYear;
use Illuminate\Http\Request;

class StudentYearController extends Controller
{
   

    public function ViewYear(){
        $data['allData']= StudentYear::all();
        return view('year.view_year', $data);


    }

    public function AddYear(){
      
        return view('year.add_year');


    }




    public function StoreYear(Request $request){
        //  $validator = Validator::make($request->all(), [
        //      'name' => 'required|unique:student_classes, name',
              
        //  ]);
  
          $validated = $request->validate([
              'name' => 'required|unique:student_years',
              
          ]);
  
          $data = new StudentYear();
          $data->name = $request->name;
          $data->save();
  
          $notification = array('message'=>'Student Year Inserted Successfully',
                                 'alert-type'=>'success'
                   );
      
          return redirect()->route('student.year.view')->with($notification);
  

          
      }




      public function EditYear($id){
        $editData = StudentYear::find($id);
        return view('year.edit_year', compact('editData'));


    }


    public function DeleteYear($id){
        $deletedata = StudentYear::find($id);
        $deletedata->delete();
        
        $notification = array('message'=>'Student Year Deleted Successfully',
                                   'alert-type'=>'info'
                     );
        
            return redirect()->route('student.year.view')->with($notification);
             }


           
             public function  UpdateYear (Request $request, $id) {
                $data =  StudentYear::find($id);  
            
             //$validator = Validator::make($request->all(), [
            //'name' => 'required|unique:student_classes,'.$data->$id,
                 
            //]);
            //if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            //}
            
            
            $validatedData = $request->validate([
                'name' => 'required|unique:student_years,name'.$data->$id
            ]);
                   
            
                $data->name = $request->name;
                         
                $data->save();
            
                $notification = array('message'=>'Student Year Updated Successfully',
                                       'alert-type'=>'success'
                         );
            
                return redirect()->route('student.year.view')->with($notification);
                 }

}
