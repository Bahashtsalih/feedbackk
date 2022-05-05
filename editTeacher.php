
<?php

include_once("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="adminStyle.css">
<title>Update Record</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


</head>
<body>

<div class="side-menu">
        <div class="brand-name">
            <h1>Admin</h1>
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
                 <h1>Teacher</h1>
                 
                </div> 
            
            </div>
        </div> 
        <div class="contact">
            <div class="contact-2"> 
                <div class="doctor">
                <div class="title">
                    <p id="show" style="color:green; position:relative; left:230px; top:-10px; "></p><br>
                    <a href="teacher.php" id="clic" style="position:relative; left:-250px; top:13px; color:red;"></a>
                    
                    </div> 
               
                    <table> 
                        <tr>
                        <th><strong>Teacher ID</strong></th>
                        <th><strong>Teacher Name</strong></th>
                  
                        <th><strong>Department</strong></th>
                       <th></th>
                        </tr> 

                      

                        <?php
                        session_start();
                        if(isset($_POST['submit'])) 
                        {

                        $update="UPDATE teacher SET T_name='".$_POST["tname"]."',dept_ID='".$_POST["dep"]."' where T_ID='".$_POST["id"]."' AND teacher.dept_ID = '$_SESSION[dept]'";
                        mysqli_query($con, $update) or die(mysqli_error());
                        echo "<script>document.getElementById('show').innerHTML='Updated successfully';</script>";
                        echo "<script>document.getElementById('clic').innerHTML='Click here';</script>";
                        }

                        $query = "SELECT * FROM teacher WHERE T_ID='".$_GET["tid"]."'"; 

                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);

                        ?>
                        <tr>
                        <div>
                        <form name="form" method="post" action=""> 
                      
                        
                        <td> 
                        <input name="id" type="text" readonly value="<?php echo $row['T_ID'];?>">
                        </td> 

                        <td>
                            <input type="text" name="tname" style="width:140%" placeholder="Name" required value="<?php echo $row['T_name'];?>" >
                       </td>

                       <td>
                       <select type="text" id="type" style="border:0; width:80%; border:1; text-align:center" required  name="dep">
                        <option></option>
                                      <?php
                                        $result=mysqli_query($con, "SELECT * FROM `department`");
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                      
                                        <option value="<?= $row['dept_ID']; ?>">
                                            <?= $row['dept_name']; ?>
                                        </option>
                                    <?php }
                                    } ?>
                                </select>

                                </td>
                        <td>
                            <button id="update" name="submit" style="  border:0; background-color:#f05264 ; width: 70px; height: 30px; 
                            font-weight: 600; color: white; border-radius: 3px; font-size: 15px;">Update</button>
                       </td>
                        </form>
                   
                        </div>
                    </tr>
                    </table>
                        </div>
                        </body>
                        </html>
















