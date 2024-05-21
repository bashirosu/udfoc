@extends('backend.master')
@section('master')        


<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Register New School Subjects</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Subject</li>
                </ol>
            </nav>
        </div>
              
    </div>
    <!--end breadcrumb-->



				<div class="row">
                    <div class="col-lg-8 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add New Subject</h5>
							</div>
							<div class="card-body p-4">
								<form  method="get" action="{{route('school.subject.store')}}" >
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
											<div class="row mb-3">
										<label for="input35" class="col-sm-3 col-form-label">Subject Code<span class ="text-danger">*</label>
										<div class="col-sm-9">
											<input type="text" name="subject_code" class="form-control" placeholder="Add Subject Code">
										</div>
									</div>
								
								
                                    <div class="row mb-3">
										<label for="input35" class="col-sm-3 col-form-label">Subject<span class ="text-danger">*</label>
										<div class="col-sm-9">
											<input type="text" name="subject_name" class="form-control" placeholder="Add Subject Name">
										</div>
									</div>
								

					

									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="d-md-flex d-grid align-items-center gap-3">
												<button type="submit" class="btn btn-primary px-4" name="submit2">Submit</button>
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
				<!--end row-->


			

</div>



@endsection