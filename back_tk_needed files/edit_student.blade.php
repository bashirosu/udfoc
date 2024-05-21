<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class ="container" style="margin-top:20px">
    <div class="row">
    <div class ="col-md-12">
    <h2> Edit Student </h2>

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

<div class = "md-3"style="margin-top:20px">
    <label class = "form-label">First Name</label>
    <input type="text" class ="form-control" name ="first_name" placeholder="Enter First Name" value ="{{$data->first_name}}">

</div>


<div class = "md-3" style="margin-top:30px">
    <label class = "form-label">Last Name</label>
    <input type="text" class ="form-control" name ="last_name" placeholder="Enter Last Name"  value ="{{$data->last_name}}">

</div>


<div class = "md-3"style="margin-top:30px">
    <label class = "form-label">Userame</label>
    <input type="text" class ="form-control" name ="username" placeholder="Enter Username"  value ="{{$data->username}}">

</div>


<div class = "md-3"style="margin-top:30px">
    <label class = "form-label">Email</label>
    <input type="email" class ="form-control" name ="email" placeholder="Email address"  value ="{{$data->email}}">

</div>

<div class = "md-3"style="margin-top:30px">
    <label class = "form-label">Academic Year</label>
    <input type="text" class ="form-control" name ="academic_year" placeholder="Academic Year"  value ="{{$data->academic_year}}">

</div>

<div class = "md-3"style="margin-top:30px">
    <label class = "form-label">Class</label>
    <input type="text" class ="form-control" name ="class" placeholder="Class Of"  value ="{{$data->class}}">

</div>

<div class = "md-3"style="margin-top:30px">
    <label class = "form-label">Institute/Group</label>
    <input type="text" class ="form-control" name ="group" placeholder="Institute/Group"  value ="{{$data->group}}">

</div>
<div class = "md-3"style="margin-top:30px">
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('student-list')}}" class= "btn btn-danger">Back</a>
<div class = "md-3"style="margin-top:30px">
</form>
      </div>
      </div>
    </div>
</body>

</html> 