<?php
 include("connection.php");
 $status = "";

   
   
     $ins_query="select feedback1.S_code,teacher.T_name,subject.Sub_name,avg(feedback1.average) as total_avg FROM feedback1,teacher,subject
     where feedback1.T_ID = teacher.T_ID and feedback1.Sub_ID=subject.Sub_ID";
     $result = mysqli_query($con,$ins_query);
     while($row = mysqli_fetch_assoc($result)){

 
?>

<html>
    <head></head>
    <body>

       <p><?php echo $row["total_avg"]; ?></p>
       <?php } ?>
    </body>
</html>









<?php
$status = "";
if(isset($_POST['submit'])) 
{

$update="update student set S_code='".$_POST["scode"]."',S_name='".$_POST["sname"]."',S_password='".$_POST["spass"]."',class_ID='".$_POST["class"]."' where S_code='".$_POST["scode"]."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='student.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}

$query = "SELECT * FROM student WHERE S_code='".$_GET["scode"]."'"; 

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" >
<input name="scode" type="text" readonly value="<?php echo $row['S_code'];?>">
<p><input type="text" name="sname" style="width:50%" placeholder="Name" 
required value="<?php echo $row['S_name'];?>" ></p>
<p><input type="password" name="spass" style="width:50%" placeholder="Password" 
required value="<?php echo $row['S_password'];?>" ></p>
<p><input type="text" name="class" style="width:50%" placeholder="Class ID" 
required value="<?php echo $row['class_ID'];?>" ></p>







<?php

include_once("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>

</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="addSub.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['submit'])) 
{

$update="update teacher set T_name='".$_POST["tname"]."',dept_ID='".$_POST["dep"]."' where T_ID='".$_POST["id"]."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='teacher.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}

$query = "SELECT * FROM teacher WHERE T_ID='".$_GET["tid"]."'"; 

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" >
<input name="id" type="number" readonly value="<?php echo $row['T_ID'];?>">
<p><input type="text" name="tname" style="width:50%" placeholder="Enter a Name" 
required value="<?php echo $row['T_name'];?>" ></p>
<p><input type="number" name="dep" style="width:50%" placeholder="Enter a dept id" 
required value="<?php echo $row['dept_ID'];?>" ></p>
<p><input name="submit" type="submit" value="Update" ></p>
</form>

</div>
</div>
</body>
</html>










<?php

include_once("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>

</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="addSub.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['submit'])) 
{

$update="update subject set Sub_name='".$_POST["sname"]."',dept_ID='".$_POST["dep"]."' where Sub_ID='".$_POST["id"]."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='subject.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}

$query = "SELECT * FROM subject WHERE Sub_ID='".$_GET["id"]."'"; 

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" >
<input name="id" type="number" readonly value="<?php echo $row['Sub_ID'];?>">
<p><input type="text" name="sname" style="width:50%" placeholder="Enter a Name" 
required value="<?php echo $row['Sub_name'];?>" ></p>
<p><input type="number" name="dep" style="width:50%" placeholder="Enter a dept id" 
required value="<?php echo $row['dept_ID'];?>" ></p>
<p><input name="submit" type="submit" value="Update" ></p>
</form>

</div>
</div>
</body>
</html>
























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
                        <th><strong>Subject ID</strong></th>
                        <th><strong>Subject Name</strong></th>
                  
                        <th><strong>Teacher Name</strong></th>
                       <th></th>
                        </tr> 

                      

                        <?php
                   
                        if(isset($_POST['submit'])) 
                        {

                        $update="update subject set Sub_name='".$_POST["sname"]."',dept_ID='".$_POST["dep"]."' where Sub_ID='".$_POST["id"]."'";
                        mysqli_query($con, $update) or die(mysqli_error());
                        echo "<script>document.getElementById('show').innerHTML='Updated successfully';</script>";
                        echo "<script>document.getElementById('clic').innerHTML='Click here';</script>";
                        }

                        $query = "SELECT `subject.Sub_name` , `teacher.T_name`, `teacher_subject.T_ID` FROM `subject` , `teacher`, `teacher_subject` WHERE `Sub_ID`='".$_GET["id"]."' AND 
                        `subject.Sub_ID` = `teacher_student.Sub_ID` AND  `teacher.T_ID` = `teacher_subject.T_ID`"; 

                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);

                        ?>
                        <tr>
                        <div>
                        <form name="form" method="post" action=""> 
                      
                        
                        <td> 
                        <input name="id" type="text" readonly value="<?php echo $row['Sub_ID'];?>">
                        </td> 

                        <td>
                            <input type="text" name="sname" style="width:140%" placeholder="Name" required value="<?php echo $row['Sub_name'];?>" >
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





















