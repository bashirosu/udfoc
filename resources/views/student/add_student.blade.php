
@extends('backend.master')
@section('master')



    <div class="container">


     <div class="card-body p-0">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Manage Students</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Student </li>
                </ol>
            </nav>
        </div>
              
    </div>
    <!--end breadcrumb-->

    @if (Session::has('success'))
      <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
    </div>
    @endif


    <form method ="post" action ="{{url('save-student')}}">
    @csrf

					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                    <div class="row">
                        <div class="col-sm-12">
                          <!-- Section Title -->
                          <div class="section-title">
                              <h4>New Student Registration</h4>
                              <div class="divider"></div>
                              </div>
                      </div>
                      </div>
                      
                      
                      <div class="row">
                          <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                      </div>
                      
                      
                      <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                      </div>
                      
                      </div>
                      
                      
                      <div class="row">
                      <div class="col-12">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                      </div>
                      </div>
                      
                      <div class="row">
                      
                      
                      </div>
                      
                      
                      <div class="row"><!--separator-->
                      <div class="col-12">
                      
                      </div>
                      </div>
                      
                      
                      
                      
                      
                      <div class="row">
                          <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                      </div>
                      
                      <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="usertype" class="form-control" id="usertype" placeholder="Usertype">
                      </div>
                      
                      <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="date" name="join_date" class="form-control" id="join_date" placeholder="Amission Date">
                      </div>
                      
                      </div>
                      
                      
                      
                      <div class="row " style ="padding-top: 25px;">
                      <div class="col-12 ">
                      
                      </div>
                      </div>
                      
                      
                      <div class="divider"></div>
                      
                      <div class="container">
                      <div class="row" style = "padding-top: 30px;">
                        <div class="col-sm-12">
                          <!-- Section Title -->
                          <div class="section-title">
                              <h4>Student Profile</h4>
                              <div class="divider"></div>
                              </div>
                      </div>
                      </div>
                      
                      
                      
                      
                      <div class="row">
                          <div class="col-12">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                      </div>
                      </div>
                      
                      <div class="row">
                      <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="City">
                      </div>
                      
                      <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="country" class="form-control" id="country" placeholder="Country">
                      </div>
                      
                      
                      </div>
                      
                      
                      <div class="row">
                      <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Tel No">
                      </div>
                      
                      
                      
                      <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="gender" name="gender" class="form-control" id="gender" placeholder="Gender">
                      </div>
                      
                      <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="date" name="birth_date" class="form-control" id="birth_date" placeholder="Date Of Birth">
                      </div>
                      
                      </div>
                      
                      
                      
                      <div class="row">
                      <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="guardian" class="form-control" id="guardian" placeholder="Guardian / Famil Member">
                      </div>
                      
                      
                      
                      <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="guardian_tel" class="form-control" id="guardian_tel" placeholder="Guardian FamilycTel No">
                      </div>
                      
                      
                      
                      </div>
                      
                      
                      
                      <div class="row " style ="padding-top: 25px;">
                      <div class="col-12 ">
                      
                      </div>
                      </div>
                      
                      
                      <div class="row" style = "padding-top: 30px;">
                        <div class="col-sm-12">
                          <!-- Section Title -->
                          <div class="section-title">
                              <h4>Academic</h4>
                              <div class="divider"></div>
                              </div>
                      </div>
                      </div>
                      
                      
                      
                      
                      <div class="row">
                      <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <select class="form-control" name="academic_year" required="">
                              <option selected="" disabled="" value="">Select Year</option>
                      
                  @foreach ($years as $year)
                  <option value="{{$year->name}}">{{$year->name}}</option>
                  @endforeach
                                                                
                            </select>
                      </div>
                      
                      
                      
                      <div class="col-4">
                         <label for="exampleFormControlInput1" class="form-label"></label>
                              <select class="form-control" name="class" required="">
                                   <option selected="" disabled="" value="">Select Class</option>
                                   
                                   @foreach ($classes as $class)
                                   <option value="{{$class->class_name}}">{{$class->class_name}}</option>
                                  @endforeach                            
                             </select>
                      </div>
                      
                      <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <select class="form-control" name="group" required="">
                              <option selected="" disabled="" value="">Select Group/Institute</option>
                      
                              @foreach ($groups as $group)
                              <option value="{{$group->group}}">{{$group->group}}</option>
                              @endforeach
                          
                            </select>
                      </div>
                      
                      
                      </div>
                      
                      
                      
                      </div>
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      <div class="row " style ="padding-top: 30px;">
                      <div class="col-12 ">
                      
                      </div>
                      </div>
                      
                      
                              <div class="col-md-12">
                              <div class="d-md-flex d-grid align-items-center gap-3">
                                  <button type="submit" class="btn btn-primary px-4">Submit</button>
                                  <button type="reset" class="btn btn-light px-4">Reset</button>
                              </div>
                          </div>
                      
                      
                      </form>
                      </div>
                      
                      </div>  
                              
                              </div>       
                              </div>   
                      </div>
                      </div>
                        
                        @endsection