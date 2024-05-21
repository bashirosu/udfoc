@extends('backend.master')
@section('master')   

  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Academics</h1>
    <a class="btn btn-primary" href="{{route('student.class.add')}}" role="button">Add New Class</a>
</div>


<div class="row"> <!-- Row for all Items-->
</div>

    <!--end breadcrumb-->
  



    <h6 class="mb-0 text-uppercase">Student Class List</h6>
    
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
               <tr>
                    <th>SL</th>
                    <th>Name</th>                   
                    <th width="25%">Action</th>                 
                </tr>
            </thead>
            <tbody>

            @foreach ($allData as $key=>$class )
    

    <tr>
        <td>{{$key+1}}</td>
        <td>{{$class->class_name}}</td>
        
        <td><a href="{{route('student.class.edit', $class->id)}}" class= "btn btn-info">Edit</a>
            <a href="" class= "btn btn-danger" id="delete">Delete</a>
        </td>
          
    </tr>

@endforeach
    
            </tbody>
       
                </table>
            </div>
        </div>
    </div>

@endsection