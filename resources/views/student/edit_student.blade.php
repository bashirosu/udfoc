
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
                    <li class="breadcrumb-item active" aria-current="page">Edit Student </li>
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


    <form method ="post" action ="{{url('update-student')}}">
    @csrf
<input type="hidden" name ="id"  value ="{{$data->id}}" >
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
                              <h4>Edit Student</h4>
                              <div class="divider"></div>
                              </div>
                      </div>
                      </div>
                      
                      
                      <div class="row">
                          <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $data->first_name }}">
                      </div>
                      
                      
                      <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $data->last_name }}">
                      </div>
                      
                      </div>
                      
                      
                      <div class="row">
                      <div class="col-12">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $data->email }}">
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
                        <input type="text" name="username" class="form-control" id="username" value="{{ $data->username }}">
                      </div>
                      
                      <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="usertype" class="form-control" id="usertype" value="{{ $data->usertype }}">
                      </div>
                      
                      <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="date" name="join_date" class="form-control" id="join_date" value="{{ $data->join_date }}">
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
<input type="text" name="address" class="form-control" id="address" value="{{ $data->profile->address }}">
</div>
</div>

<div class="row">
<div class="col-6">
<label for="exampleFormControlInput1" class="form-label"></label>
<input type="text" name="city" class="form-control" id="city" value="{{ $data->profile->city }}">
</div>

<div class="col-6">
<label for="exampleFormControlInput1" class="form-label"></label>
<input type="text" name="country" class="form-control" id="country" value="{{ $data->profile->country }}">
</div>


</div>


<div class="row">
<div class="col-4">
<label for="exampleFormControlInput1" class="form-label"></label>
<input type="text" name="mobile" class="form-control" id="mobile" value="{{ $data->profile->mobile }}">
</div>



<div class="col-4">
<label for="exampleFormControlInput1" class="form-label"></label>
<input type="gender" name="gender" class="form-control" id="gender" value="{{ $data->profile->gender }}">
</div>

<div class="col-4">
<label for="exampleFormControlInput1" class="form-label"></label>
<input type="date" name="birth_date" class="form-control" id="birth_date" value="{{ $data->profile->birth_date}}">
</div>

</div>

<div class="row">
  <div class="col-6">
    <label for="exampleFormControlInput1" class="form-label"></label>
    <input type="text" name="guardian" class="form-control" id="guardian" value="{{ $data->profile->guardian}}">
  </div>
  
  
  
  <div class="col-6">
    <label for="exampleFormControlInput1" class="form-label"></label>
    <input type="text" name="guardian_tel" class="form-control" id="guardian_tel" value="{{ $data->profile->guardian_tel}}">
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
  
    
      @foreach ($years as $year)
      <option value="{{$year->name}}"{{ ($data->academic_year == $year->name )? "selected":"" }} >{{$year->name}}</option>
      @endforeach   
      
            
    </select>
</div>



<div class="col-4">
 <label for="exampleFormControlInput1" class="form-label"></label>
      <select class="form-control" name="class" required="">
     
      @foreach ($classes as $class)
      <option value="{{$class->class_name}}"{{ ($data->class_name == $class->class_name )? "selected":"" }} >{{$class->class_name}}</option>
      @endforeach                        
     </select>
</div>

<div class="col-4">
<label for="exampleFormControlInput1" class="form-label"></label>
<select class="form-control" name="group" required="">

<option selected="" disabled="" value="">Select Group</option>

@foreach ($groups as $group)
<option value="{{$group->group}}"{{ ($data->group == $group->group )? "selected":"" }} >{{$group->group}}</option>
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