@@ -0,0 +1,140 @@

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                {{-- <?php $image_path = '/upload/udfoc.png'; ?>
                <img src="{{ public_path().$image_path }}" width="100" height="100"> --}}
                {{-- <img src="{{ url('upload/udfoc.png') }}" style="width: 120px; height: 120px;">			 --}}
   <img src="{{ url('upload/udfoc.png') }}" swidth="100" height="100"">		
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
           <strong>Name:   </strong>   <br>
           <strong>Class:   </strong>   <br>
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



<h4>ACHIEVEMENTS</h4>
 


<table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
      <tr class="font">
        <th>Exam Name</th> 
        <th>Exam YeR</th> 
        <th>Subject Code</th> 
        <th>Subject Name</th> 
        <th>Obtained Marks </th>
        <th>Grade </th>
      </tr>
    </thead> 
    
    
  </table>
"" +''+
  ""
 
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
