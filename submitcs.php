
<?php

include("connection.php");
?>

<html>
<head>
<title>Submit</title>
<link rel="stylesheet" href="adminStyle.css">
</head>
<h1 style="text-align: center; color:#f05264 ; ">Congratulations</h1>
<p style="text-align: center;">Your Feedback was submitted</p>
<p style="text-align: center;">Dear student to give feedback for other subject please <a id="aa" href="log.php"  style="text-align: center;">Logout</a> </p>


<div class="contact">

<div class="contact-2"> 
    <div class="recent-payments">
        <div class="title">
        <?php
           session_start();
            $sel_query=" SELECT distinct f.S_code, st.S_name from feedback1 f, student st
            WHERE f.S_code = '$_SESSION[code] ' AND
            f.S_code = st.S_code ";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>

            <h1 class="btn" id="clc" style="font-size:25px; margin-left:20px;"> <?php echo $row["S_name"]; } ?>  It's your feedback Result to all the subjects </h1>
        </div> 
        <table border="1" style="border-collapse:collapse; margin-left:30%; margin-top:2%; width:40%; height:45%">
            <thead>
            <tr style="background-color:#f05264; color:white">
    
      
            <th><strong>Subject</strong></th>
            <th><strong>Teacher</strong></th>
            <th><strong>Average</strong></th>
         
            </tr>
            </thead>
            <tbody>
            <?php
  
            $sel_query=" SELECT f.S_code, f.T_ID, f.Sub_ID, f.average, t.T_name, s.Sub_name, st.S_name from feedback1 f, teacher t, subject s, student st
            WHERE f.S_code = '$_SESSION[code] ' AND
            f.S_code = st.S_code AND
            f.T_ID = t.T_ID AND
            f.Sub_ID = s.Sub_ID";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
           
            <td align="center"><?php echo $row["Sub_name"]; ?></td>
            <td align="center"><?php echo $row["T_name"]; ?></td>
            <td align="center"><?php echo $row["average"]; ?></td>
            </tr>
            <?php  } ?>


            </tbody>
            </table>
        
     </div>
     </div>
     </div>



</html>