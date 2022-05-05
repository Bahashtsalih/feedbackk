
<?php 
  session_start();
  include("connection.php");
  $status = "";
  if(isset($_POST['add'])){
      $name =$_REQUEST['av'];
    
      $ins_query="insert into feedback1 values('$_SESSION[name]','6','6','$name')";
      mysqli_query($con,$ins_query)
      or die(mysql_error());
      header('location:feedback.php');
  }
  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="fform1.css"> 
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>    


</head> 

<body>  

    <form method="POST">
    <h3>Please answer these questions to the best of your knowledge:</h3>
    <div class="wrapper">  
       1. The course (or section) presented skills in a helpful sequence
        <br /> 
        <input type="radio"class="r1"  name="q1" value="5" />strongly agree
        <input type="radio"class="r1"  name="q1" value="4" />agree
        <input type="radio"class="r1"  name="q1" value="3" />neutral
        <input type="radio"class="r1"  name="q1" value="2" />disagree
        <input type="radio"class="r1"  name="q1" value="1" />strongly disagree
        <br />
        <br />
        2. The course (or section) provided an appropriate balance between instruction and practice
        <br />
        <input type="radio" class="r1" name="q2" value="5" />strongly agree
        <input type="radio" class="r1" name="q2" value="4" />agree
        <input type="radio" class="r1" name="q2" value="3" />neutral
        <input type="radio" class="r1" name="q2" value="2" />disagree
        <input type="radio" class="r1" name="q2" value="1" />strongly disagree
        <br />
        <br />
        3. The course (or section) was appropriate for the stated level of the class
        <br />
        <input type="radio"class="r1"  name="q3" value="5" />strongly agree
        <input type="radio"class="r1"  name="q3" value="4" />agree
        <input type="radio"class="r1"  name="q3" value="3" />neutral
        <input type="radio"class="r1"  name="q3" value="2" />disagree
        <input type="radio" class="r1" name="q3" value="1" />strongly disagree
        <br />
        <br />
        4. The course (or section) was organized in a way that helped me learn
        <br />
        <input type="radio"class="r1"  name="q4" value="5" />strongly agree
        <input type="radio"class="r1"  name="q4" value="4" />agree
        <input type="radio"class="r1"  name="q4" value="3" />neutral
        <input type="radio" class="r1" name="q4" value="2" />disagree
        <input type="radio" class="r1" name="q4" value="1" />strongly disagree
        <br />
        <br />
        5. The lab helped to complement the lectures
        <br />
        <input type="radio" class="r1" name="q5" value="5" />strongly agree
        <input type="radio" class="r1" name="q5" value="4" />agree
        <input type="radio" class="r1" name="q5" value="3" />neutral
        <input type="radio" class="r1" name="q5" value="2" />disagree
        <input type="radio" class="r1" name="q5" value="1" />strongly disagree
        <br />
        <br />
        6. The course (or section) provided a mixture of explanation and practice
        <br />
        <input type="radio"class="r1"  name="q6" value="5" />strongly agree
        <input type="radio"class="r1"  name="q6" value="4" />agree
        <input type="radio" class="r1" name="q6" value="3" />neutral
        <input type="radio" class="r1" name="q6" value="2" />disagree
        <input type="radio" class="r1" name="q6" value="1" />strongly disagree
        <br />
        <br />
        7. The course (or section) was effectively organized
        <br />
        <input type="radio" class="r1" name="q7" value="5" />strongly agree
        <input type="radio"class="r1"  name="q7" value="4" />agree
        <input type="radio"class="r1"  name="q7" value="3" />neutral
        <input type="radio"class="r1"  name="q7" value="2" />disagree
        <input type="radio" class="r1" name="q7" value="1" />strongly disagree
        <br />
        <br />
        8. The course (or section) assignments and lectures usefully complemented each other
        <br />
        <input type="radio"class="r1"  name="q8" value="5" />strongly agree
        <input type="radio"class="r1"  name="q8" value="4" />agree
        <input type="radio"class="r1"  name="q8" value="3" />neutral
        <input type="radio"class="r1"  name="q8" value="2" />disagree
        <input type="radio" class="r1" name="q8" value="1" />strongly disagree
        <br />
        <br />
        9. The course (or section) instructions (including, manuals, handouts, etc.) were clear
        <br />
        <input type="radio" class="r1" name="q9" value="5" />strongly agree
        <input type="radio" class="r1" name="q9" value="4" />agree
        <input type="radio" class="r1" name="q9" value="3" />neutral
        <input type="radio" class="r1" name="q9" value="2" />disagree
        <input type="radio" class="r1" name="q9" value="1" />strongly disagree
        <br />
        <br />
        10. The course (or section) work helped me understand concepts more clearly
        <br />
        <input type="radio" class="r1" name="q10" value="5" />strongly agree
        <input type="radio" class="r1"  name="q10" value="4" />agree
        <input type="radio" class="r1" name="q10" value="3" />neutral
        <input type="radio" class="r1" name="q10" value="2" />disagree
        <input type="radio" class="r1" name="q10" value="1" />strongly disagree
        <br />
        <br />
       
 </div> 
 <button type="submit" onclick="displayRadioValue()" id="add" name="add">
    Submit
</button> 
<input type="number" id="f" name="av" value="1" step="0.1">
</div>      

   
    </div>     
</form> 
    <script> 
       
        function displayRadioValue(){
    var sum = 0,count=0;
    var ele = document.getElementsByClassName('r1');
    for(i = 0; i < ele.length; i++) { 
       
                if(ele[i].checked)   {
                count+=1;
                sum+=parseInt(ele[i].value);
                }
               
     }var avg;
     avg = sum/count;  
     document.getElementById("f").value=avg; 
     
    }  
    





    </script>
</body>
</html>
