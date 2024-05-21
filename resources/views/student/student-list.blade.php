@extends('backend.master')
@section('master')   

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Student Lists</h1>
        <a class="btn btn-primary" href="{{url('add-student')}}" role="button">Register New Student</a>
    </div>
    

         
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Viwe All Registered Students</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>SL</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Email</th>
                                            <th>Class Of:</th>
                                            <th>Academic Year Of</th>
                                            <th>Institute</th>
                                            <th width = "25%" >Action</th>       
                                       
                                         
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>SL</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Email</th>
                                            <th>Academic Year Of</th>
                                            <th>Class Of:</th>                               
                                            <th>Institute</th>
                                           <th width = "25%" >Action</th>       
                                        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>


        @foreach ($data as $key=> $student )
    

    <tr>
        <td>{{$key+1}}</td>
       <td>{{$student->last_name}}</td>
        <td>{{$student->first_name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->academic_year }}</td>
        <td>{{$student->class}}</td>
        <td>{{$student->group}}</td>
     
        <td><a href="{{url('edit-student/'.$student->id)}}" class="btn btn-primary" class= "btn btn-info">Edit</a>
            <a href="{{url('delete-student/'.$student->id)}}"  class= "btn btn-danger" id="delete">Delete</a>
        </td>
          
    </tr>

@endforeach
    
</tbody>



                    </tr>

                                 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



@endsection
