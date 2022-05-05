<?php
 include("connection.php");
 $ins_query="select avg(feedback1.average) as total_avg , student.S_code FROM feedback1,student
 where feedback1.S_code = student.S_code";
 $result = mysqli_query($con,$ins_query);
 while($row = mysqli_fetch_assoc($result)){ 
     $code = $row['S_code'];
 }
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
            <h1 class="main">admin panel</h1>
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
                    <h1>Feedbacks</h1>
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
                  
                   
                        <th><strong>Subject Name</strong></th>
                        <th><strong>Teacher Name</strong></th>
                        <th><strong>Total Average</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                   
                            $ins_query="select AVG(average) as total_avg,feedback1.T_ID, feedback1.Sub_ID,teacher.T_name,subject.Sub_name FROM feedback1,teacher,subject
                            WHERE feedback1.T_ID = teacher.T_ID AND feedback1.Sub_ID=subject.Sub_ID AND feedback1.T_ID = feedback1.T_ID and feedback1.Sub_ID = feedback1.Sub_ID 
                             group by feedback1.Sub_ID ";
                            $result = mysqli_query($con,$ins_query);
                            while($row = mysqli_fetch_assoc($result)){ 
                              $row["total_avg"]=round($row["total_avg"], 2);  ?>

                        <td align="center"><?php echo $row["Sub_name"]; ?></td>
                        <td align="center"><?php echo $row["T_name"]; ?></td>

                      

                        <td align="center"><?php echo $row["total_avg"]; ?></td>
                   
                      
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
       
    </body>
</html>




