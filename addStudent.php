

<?php

include("connection.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $code =$_REQUEST['scode'];
    $name=$_REQUEST['name'];
    $pass =$_REQUEST['pass'];
    $class =$_REQUEST['class'];

    $ins_query="insert into student values('$code','$name','$pass','$class')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    header('location:student.php');
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


</head>
<body> 
    <div class="side-menu">
        <div class="brand-name">
            <h1 class="main">admin</h1>
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
                   <h1>Students</h1>
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
                        <th><strong>Student Name</strong></th>
                        <th><strong>Student Password</strong></th>
                        <th><strong>Branch</strong></th>
                        <th><strong>class</strong></th>
                        <th><strong>Edit</strong></th>
                        <th><strong>Delete</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        session_start();
                        $sel_query="SELECT student.S_code,student.S_name,student.S_password,class.class_name, branch.B_name FROM student,class,branch
                        WHERE student.class_ID = class.class_ID AND class.B_ID = branch.B_ID AND branch.dept_ID = '$_SESSION[dept]' order by S_Code";
                        $result = mysqli_query($con,$sel_query);
                        while($row = mysqli_fetch_assoc($result)) { ?>

                        <td align="center"><?php echo $row["S_code"]; ?></td>
                        <td align="center"><?php echo $row["S_name"]; ?></td>
                        <td align="center"><?php echo $row["S_password"]; ?></td>
                        <td align="center"><?php echo $row["B_name"]; ?></td>
                        <td align="center"><?php echo $row["class_name"]; ?></td>
                      
                        <td align="center">
                        <a href="edit.php?id=<?php echo $row["S_code"]; ?>">Edit</a>
                        </td>
                  
                        <td align="center">
                        <a href="delete.php?id=<?php echo $row["S_code"]; ?>">Delete</a>
                        </td>
                        </tr>
                        <?php } ?>

                        <div id="insert">
          
                            <form name="form" method="post" action=""> 
                            <input type="hidden" name="new" value="1">
                            <tr >
                             
                            <td id="tdadd"><input type="text" name="scode" placeholder="Student code" id="add" style="border:0" required></td>
                            <td id="tdadd"><input type="text" name="name" placeholder="Name" id="add" style="border:0" required></td>
                            <td id="tdadd"><input type="password" name="pass" placeholder="Password" id="add" style="border:0" required></td>
                            <td id="tdadd"> 
                            <select type="text" id="type" style="border:0; width:120%; text-align:center" required >
                            <option></option>
                                      <?php
                                        $result=mysqli_query($con, "SELECT * FROM `branch` WHERE dept_ID= 3 ");
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                      
                                        <option value="<?= $row['B_ID']; ?>">
                                            <?= $row['B_name']; ?>
                                        </option>
                                    <?php }
                                    } ?>
                                </select>

                                </td>

                        <td>
                        <select id="size" name="class">
                        <option value=""> Class </option>
                        </select>

                        <script>
                        $(document).ready(function () {
                        $("#type").change(function () {
                        var val = $(this).val();
                        if (val == "1") {
                        $("#size").html("<?php $c1_res=mysqli_query($con, "SELECT * FROM `class` WHERE `B_ID` = 1");
                        while($c1 = mysqli_fetch_assoc($c1_res)){ echo "<option value='" . $c1['class_ID'] . "'>" . $c1['class_name'] . "</option>"; } ?>");
                        } else if (val == "2") {
                        $("#size").html("<?php $c2_res=mysqli_query($con, "SELECT * FROM `class` WHERE `B_ID` = 2");
                        while($c2 = mysqli_fetch_assoc($c2_res)){ echo "<option value='" . $c2['class_ID'] . "'>" . $c2['class_name'] . "</option>"; } ?>");
                        } else if (val == "3") {
                        $("#size").html("<?php $c3_res=mysqli_query($con, "SELECT * FROM `class` WHERE `B_ID` = 3");
                        while($c3 = mysqli_fetch_assoc($c3_res)){ echo "<option value='" . $c3['class_ID'] . "'>" . $c3['class_name'] . "</option>"; } ?>");
                        } else if (val == "4") {
                        $("#size").html("<?php $c4_res=mysqli_query($con, "SELECT * FROM `class` WHERE `B_ID` = 4");
                        while($c4 = mysqli_fetch_assoc($c4_res)){ echo "<option value='" . $c4['class_ID'] . "'>" . $c4['class_name'] . "</option>"; } ?>");
                        } 

                        });
                        });
                        </script>
                        </td>>
                     <td id="tdadd"><button onclick="window.location.href='student.php'" >Submit</button></td>
                        </tr>
                        
                            </form>
                            <p style="color:#FF0000;"><?php echo $status; ?></p>
                            </div>

                        </tbody>
                        </table>
                    

                  
          
                 </div>
                 </div>

    
        </div>
    </div>




</body>
</html>



















