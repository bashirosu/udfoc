@extends('backend.master')
@section('master')


        <link href="{{asset('backend/css/styles.css')}}" rel="stylesheet" />

        
          <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Register Student Examination Records</h1>
        <a class="btn btn-primary" href="" role="button">View All Registry</a>
    </div>
    

         
    <div id="layoutSidenav">

        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container-xl px-4">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="filter"></i></div>
                                    All registered Students
                                    </h1>
                                    <div class="page-header-subtitle">Search, Choose and register exams record</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4 mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">List of Students: Search to filter list for editing</div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>F
                                    <tr>
                                        <th>SL</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Email</th>
                                        <th>Academic Year Of</th>
                                        <th>Class Of:</th>                               
                                        <th>Institute</th>
                                        <th>Actions</th>
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
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    @foreach ($data as $key=> $student )


                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$student->last_name}}</td>
                                         <td>{{$student->first_name}}</td>
                                         <td>{{$student->email}}</td>
                                         <td>{{$student->academic_year }}</td>
                                         <td>{{$student->class}}</td>
                                         <td>{{$student->group}}</td>
                                        <td>
                                            <a href="{{url('student/exams/register/'.$student->id)}}"class="btn btn-blue" type="button">Add</a>
                                            <a href="{{url('student/registeredexams/view/'.$student->id)}}"class="btn btn-green" type="button">Preview</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
               
                </div>
            </main>
     
        </div>
    </div>

    
@endsection
