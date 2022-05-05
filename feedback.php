<?php

include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <link rel="stylesheet" href="adminStyle.css">
    <title>Admin Panel</title>






</head>
<body> 
    <div class="side-menu">
        <div class="brand-name">
            <h1 class="main">admin </h1>
        </div> 
        <ul>

            <li><img src="./img/b2.png" alt=""> &nbsp;<span onclick="window.location.href='subject.php'">subjects</span> </li>
            <li><img src="./img/b2.png" alt="">&nbsp;<span onclick="window.location.href='student.php'">student</span>  </li>
            <li><img src="./img/b3.png" alt="">&nbsp;<span onclick="window.location.href='teacher.php'">teacher</span> </li>
            <li><img src="./img/b4.png" alt="">&nbsp;<span onclick="window.location.href='feedback.php'">feedback</span> </li>
            <li><img src="./img/b4.png" alt="">&nbsp;<span onclick="window.location.href='totalavg.php'">Total Average</span> </li>

        </ul>
    </div> 
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                   <h1>feedbacks</h1>
                </div> 
                
            </div>
        </div> 
        <div class="contact">

            <div class="contact-2"> 
                <div class="recent-payments">
                    <div class="title">
                   
       
                    </div> 
                    <table border="1" style="border-collapse:collapse;">
                        <thead>
                        <tr style="background-color:#f05264; color:white">
                        <th><strong>Student Code</strong></th>
                     
                        <th><strong>Teacher Name</strong></th>
                        <th><strong>Subject Name</strong></th>
                        <th><strong>Average</strong></th>
                      
               
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        session_start();
                        $sel_query="SELECT feedback1.S_code,teacher.T_name,subject.Sub_name,feedback1.average FROM feedback1,teacher,subject
                        WHERE feedback1.T_ID = teacher.T_ID and feedback1.Sub_ID=subject.Sub_ID AND subject.dept_ID = '$_SESSION[dept]'  order by feedback1.S_code";
                        $result = mysqli_query($con,$sel_query);
                        while($row = mysqli_fetch_assoc($result)) { ?>

                        <td align="center"><?php echo $row["S_code"]; ?></td>
                        <td align="center"><?php echo $row["T_name"]; ?></td>
                        <td align="center"><?php echo $row["Sub_name"]; ?></td>
                        <td align="center"><?php echo $row["average"]; ?></td>
                     
                      
                        </tr>
                        <?php } ?>


                        </tbody>
                        </table>
                    

                  
          
                 </div>
                 </div>

    
        </div>
    </div>




</body>
</html>