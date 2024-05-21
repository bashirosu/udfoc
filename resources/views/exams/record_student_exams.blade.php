
@extends('backend.master')
@section('master')



    <div class="container">


     <div class="card-body p-0">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Register Student Result </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Register Student Result </li>
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


    <form method ="post" action ="{{route('save.exams.result', $data->id)}}">
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
                              <h4>Student To Register Exams</h4>
                              <div class="divider"></div>
                              </div>
                      </div>
                      </div>
                      
                      
                      <div class="row">
                          <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="first_name" class="form-control " id="first_name" value="{{ $data->first_name }}" readonly>
                      </div>
                      
                      
                      <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $data->last_name }}" readonly>
                      </div>
                      
                      </div>
                      
                      
                      <div class="row">
                      <div class="col-12">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $data->email }}" readonly>
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
                        <input type="text" name="class" class="form-control" id="username" value="{{ $data->class }}"readonly>
                      </div>
                      
                      <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="academic_year" class="form-control" id="usertype" value="{{ $data->academic_year }}"readonly>
                      </div>
                      
                      <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="date" name="join_date" class="form-control" id="join_date" value="{{ $data->join_date }}"readonly>
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
                              <h4>Register Results</h4>
                              <div class="divider"></div>
                              </div>
                      </div>
                      </div>
                      
                      
                             
<div class="row">
           
  <div class="row">
    <div class="col-4">
      <label for="exampleFormControlInput1" class="form-label"></label>
      <select class="form-control" name="exams_year" required="">
            <option selected="" disabled="" value="">Select Exams  Year</option>
    
@foreach ($years as $year)
<option value="{{$year->name}}">{{$year->name}}</option>
@endforeach
                                              
          </select>
    </div>
    
    
    
    <div class="col-4">
       <label for="exampleFormControlInput1" class="form-label"></label>
            <select class="form-control" name="exams_type" required="">
                 <option selected="" disabled="" value="">Select Exams Name/Type</option>
                 
                 @foreach ($examsTypes as $examsType)
                 <option value="{{$examsType->exam_name}}">{{$examsType->exam_name}}</option>
                @endforeach                            
           </select>
    </div>
    
    <div class="col-4">
      <label for="exampleFormControlInput1" class="form-label"></label>
      <input type="date" name="exams_date" class="form-control" id="exam_date" value="">
      </div>
      
      </div>
    
    
    </div>
  
  
  </div>

  <div class="row " style ="padding-top: 25px;">
    <div class="col-12 ">
    
    </div>
    </div>

  <div class="row">
     
    <div class="col-4">
      <label for="exampleFormControlInput1" class="form-label"></label>
           <select class="form-control" name="subject_name" required="">
                <option selected="" disabled="" value="">Select Subject For Grading</option>
                
                @foreach ($subjects as $subject)
                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
               @endforeach                            
          </select>
   </div>
    
    
    
    <div class="col-4">
    <label for="exampleFormControlInput1" class="form-label"></label>
    <input type="text" name="obtained_marks" class="form-control" id="obtained_marks" placeholder="Enter Student Mark">
    </div>
    
    <div class="col-4">
      <label for="exampleFormControlInput1" class="form-label"></label>
      <input type="text" name="grade" class="form-control" id="grade" placeholder="Your Grade">
       </div>
    
    </div>


<div class="row " style ="padding-top: 25px;">
<div class="col-12 ">

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