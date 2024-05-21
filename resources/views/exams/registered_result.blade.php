@extends('backend.master')
@section('master')   



  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transcript Preview</h1>
        <a class="btn btn-primary" href="{{url('student/exams/pdf/'.$singleStudent->id)}}" role="button">View / Print Final Transcript</a>
    </div>
    

         
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Result Transcript</h6>
                        </div>


     <div class="row"> <!-- start 2nd row -->


     
        <div class="row">  <!-- start 1st row -->
            <div style="float: right" class="col-md-2 text-center">
        <img src="{{ url('upload/udfoc.png') }}" style="width: 120px; height: 120px;">			
            </div>
        
          <div class="col-md-2 text-center">
                
            </div>
        
            <div class="col-md-4 text-center" style="float: left;">
                <h4><strong>Uthman Dan Fodio Open College</strong></h4>
                <h6><strong> A Distance Learning</strong></h6>
                <h5><strong><u><i>Academic Result Transcript</i></u></strong></h5>
                <h6><strong>Institute Of Arabic  and Islamic Studies</strong></h6>
                
            </div>
        
            <div class="col-md-12">
        <hr style="border: solid 1px; width: 100%; color: #1c12dc; margin-bottom: 0px;">
        <p style="text-align: right;"><u><i>Print Date: </i>{{ date('d M Y') }} </u></p>
                
            </div>
        
        
        </div> <!--  end 1st row -->   





        <div class="col-md-6">
	
        <table border="1" style="border-color: #3239a7;" width="100%" cellpadding="4" cellspacing="2">
         
            <tr>
                <td width="50%"><p class="fw-bold">Student Id:</p></td>
                <td width="50%">""</td>
            </tr>
            
            
            <tr>
                <td width="50%"> <p class="fw-bold">Name: </p></td>
                <td width="50%">{{$singleStudent->last_name}} . {{$singleStudent->first_name}}</td>
            </tr>
            
            
            <tr>
                <td width="50%"> <p class="fw-bold"> Institute: </p></td>
                <td width="50%">{{$singleStudent->group}}</td>
            </tr>
            
            
            <tr>
                <td width="50%"><p class="fw-bold"> class Of: </p></td>
                <td width="50%">{{$singleStudent->class }}</td>
            </tr>
                        
                    </table>

</div>


<div class="col-md-6"style ="padding-bottom: 15px;">


	<table border="1" style="border-color: #0c3d8d;" width="100%" >
		<thead>
      <tr>
        <th> School Grading Method </th> 
			<tr>
				<th> Letter Grade </th>
				<th> Marks Interval </th>
				<th> Grade Point </th>
			</tr>
		</thead>
		<tbody>
			{{-- @foreach($allGrades as $mark) --}}
			<tr>
<td>""</td>
<td>"Mark" - ""</td>
<td></td>
{{-- </tr> 
			@endforeach --}}
		</tbody> 

</table>

</div> <!-- // end col md 6 -->



</div>


<br><br>

<div class="row" > <!-- 3td row start -->
    <div class="col-md-12" style="padding-bottom: 30px">
    </div>
</div>
<div class="row" > <!-- 3td row start -->
  <div class="col-md-12">

<table border="1" style="border-color: #140ca7;" width="100%" cellpadding="1" cellspacing="1">
<thead>
<tr>
<th class="text-center">SL</th>
<th class="text-center">Type Of Exams</th>
<th class="text-center">Year</th>
<th class="text-center">Subjects</th>
<th class="text-center">Exam Date</th>   
<th class="text-center">Obtained Marks</th>
<th class="text-center">Letter Grade</th>
<th class="text-center">Remarks</th>
</tr>
</thead>

<tbody>



@php
$total_marks = 0;
$total_point = 0;
@endphp


@foreach ($examsrecordSingle as $key =>$student )
        
<tr>
    <td class="text-center">{{ $key+1 }}</td>
    <!--where to place subjects-->
    <td class="text-center">{{$student->exams_type}}</td>
    <td class="text-center">{{$student->exams_year}}</td>
    

    <td class="text-center">{{$student->subject_name}}</td>
    <td class="text-center">{{$student->exams_date}}</td>
    <td class="text-center">{{$student->obtained_marks }}</td>
    <td class="text-center">{{$student->grade}}</td>

    
    

</tr>
@endforeach  

</tbody>
    </table>

  </div> <!-- // end Col md -12    -->   


</div> <!-- end 3td row start -->


                        <div class="row" >
                            
                            <div class="col-12"style="padding-top: 2%"> 

                    </div>
                    </div>

                    <table border="22" style="border-color: #4148cf;" width="100%" cellpadding="1" cellspacing="1">

                        <div class="text-nowrap" style="width: 8rem;">
                          <strong>Certificate Level Explainaton:</strong> Secondary/High School Equivalent-First Year introductory courses
                        </div>
                          </table>    



                          <div class="card-body" >
      
                          </div>
                          
                              <div class="card-body" >
                              
                          </div>
                              <br><br><br><br>
                         
                              <div class="row"> <!--  6th row start -->
                                <div class="col-md-4">
                                  <hr style="border: solid 1px; widows: 60%; color: #370ca4; margin-bottom: -3px;">
                                  <div class="text-center">Head Of Faculty</div>
                                </div>
                              
                                  <div class="col-md-4">
                                
                                </div>
                              
                                  <div class="col-md-4">
                               <hr style="border: solid 1px; widows: 60%; color: #1d27b0; margin-bottom: -3px;">
                                  <div class="text-center">Dean /Principal </div>
                                </div>
                                
                              </div>  <!--  End 6th row start -->


                    
                   
                    </div>

                </div>

@endsection
