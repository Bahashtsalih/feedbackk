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
            <li><img src="./img/b11.png" alt="">&nbsp;<span onclick="window.location.href='teacher.php'">teacher</span> </li>
            <!-- <li><img src="./img/b4.png" alt="">&nbsp;<span onclick="window.location.href='feedback.php'">feedback</span> </li> -->
            <li><img src="./img/b4.png" alt="">&nbsp;<span onclick="window.location.href='totalavg.php'">Total Average</span> </li>
           
        </ul>
    </div> 
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                   <h1>Students</h1>
                </div> 
                
            </div>
        </div> 
        <div class="contact">

            <div class="contact-2"> 
                <div class="recent-payments">
                    <div class="title">
                   
                        <a href="addStudent.php" class="btn" id="clc"> Add new Student </a>
                    </div> 
                    <table border="1" style="border-collapse:collapse;">
                        <thead>
                        <tr style="background-color:#f05264; color:white">
                        <th><strong>Student Code</strong></th>
                        <th><strong>Student Name</strong></th>
                        <th><strong>Password</strong></th>
                        <th><strong>Branch</strong></th>
                        <th><strong>Class</strong></th>
                        <th><strong>Edit</strong></th>
                        <th><strong>Delete</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                       session_start();
                        $sel_query=" SELECT distinct student.S_code,student.S_name,student.S_password,class.class_name, branch.B_name FROM student,class,branch
                        WHERE student.class_ID = class.class_ID AND class.B_ID = branch.B_ID AND branch.dept_ID = '$_SESSION[dept]' order by S_Code";
                        $result = mysqli_query($con,$sel_query);
                        while($row = mysqli_fetch_assoc($result)) { ?>

                        <td align="center"><?php echo $row["S_code"]; ?></td>
                        <td align="center"><?php echo $row["S_name"]; ?></td>
                        <td align="center"><?php echo $row["S_password"]; ?></td>
                        <td align="center"><?php echo $row["B_name"]; ?></td>
                        <td align="center"><?php echo $row["class_name"]; ?></td>
                      
                        <td align="center">
                        <a href="editStudent.php?scodee=<?php echo $row["S_code"]; ?>">Edit</a>
                        </td>
                        <td align="center">
                        <a href="deleteStudent.php?scode=<?php echo $row["S_code"]; ?>">Delete</a>
                        </td>
                        </tr>
                        <?php  } ?>


                        </tbody>
                        </table>
                    

                  
          
                 </div>
                 </div>

    
        </div>
    </div>




</body>
</html>