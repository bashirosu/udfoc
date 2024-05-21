@@ -0,0 +1,140 @@
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  
    
<title>Student Transcript</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

    <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
      <tr>
          <td valign="top">
            <!-- {{-- <img src="" alt="" width="150"/> --}} -->
            <center>
            <h1 style="color: green; font-size: 26px;"><strong>Uthman Dan Fodio Open College</strong></h1>
            
            <h2><strong> A Distance Learning</strong></h2>
            <h3><strong>www.udfoc.org</strong></h3>
       
            <h2><strong><u><i>Academic Exams Result Transcript</i></u></strong></h2>
        </center>
          </td>
          
          <td> 
            
            <h2>
                <?php $image_path = '/upload/udfoc.png'; ?>
                <img src="{{ public_path() . $image_path }}" width="100" height="100">
          
              </h2> 
        </td>
      </tr>
  
    </table>

    
  <table width="100%" style="background:white; padding:2px;"></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <colgroup>
        <col>
          <col>
       
      </colgroup>
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
            <h3><span style="color: green;">Student Information:</span></h3>
           <strong>Student Id:   </strong>  <br>
           <strong>Name:   </strong> {{$singleStudent->last_name}} &nbsp;  {{$singleStudent->first_name}}   <br>
           <strong>Class:   </strong>  <br>
           <strong>Session (Year):   </strong>  <br>

         </p>
        </td>
        
        <td>
          <p class="font">
            <h3><span style="color: rgb(218, 163, 22);">School Grading System:</span></h3>
            Letter Grade: <br>
            Marks Interval: <br>
            Grade Point :  </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
  <br> <br>
  <i style="font-size: 10px; float: right;">Generated/Printed Date : {{ date("d M Y") }}</i>



<h4>ACHIEVED RESULTS</h4>
 


<table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
      <tr class="font">
        <th class="text-center">SL</th>

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
    
          <td class="text-center">{{$student->exams_year}}</td>
          
      
          <td class="text-center">{{$student->subject_name}}</td>
          <td class="text-center">{{$student->exams_date}}</td>
          <td class="text-center">{{$student->obtained_marks }}</td>
          <td class="text-center">{{$student->grade}}</td>
      
          
          
      
      </tr>
      @endforeach  
      
      </tbody> 
    
  </table>

 
</body>



<table  border="0": collapse; style="border-color: #ffffff;" width="100%" cellpadding="8" cellspacing="2">
    
    <thead>
        <tr>
            <h4><span style="color: rgb(218, 163, 22);">School Grading System:</span></h4>
        </tr>
        <tr>
           
            <th align="left"> Letter Grade </th>
            <th align="left"> Marks Interval </th>
            <th align="left"> Grade Point </th>
        </tr>
    </thead>
    <tr>
 Letter Grade
</tr>

    <tbody>
     
    </tbody>

    <tr>
    </tr>
    <tr>
        <h4><span style="color: rgb(218, 163, 22);">Class Level Explanation:</span></h4>
        <h3><span style="color: green;">This level is equivalent to first Year Secondary/ High Scool</span></h3>  
    </tr>
</table>

  

    </html>