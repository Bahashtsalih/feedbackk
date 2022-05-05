
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
                 <h1>student</h1>
                 
                </div> 
            
            </div>
        </div> 
        <div class="contact">
            <div class="contact-2"> 
                <div class="doctor">
                <div class="title">
                    <p id="show" style="color:green; position:relative; left:230px; top:-10px; "></p><br>
                    <a href="student.php" id="clic" style="position:relative; left:-285px; top:13px; color:red;"></a>
                    
                    </div> 
               
                    <table> 
                        <tr>
                        <th><strong>Student Code</strong></th>
                        <th><strong>Student Name</strong></th>
                        <th><strong>Password</strong></th>
                        <th><strong>Branch</strong></th>
                        <th><strong>Class</strong></th>
                            <th></th>
                        </tr> 

                      

                        <?php
                   
                        if(isset($_POST['submit'])) 
                        {

                        $update="UPDATE student SET S_code='".$_POST["scode"]."',S_name='".$_POST["sname"]."',S_password='".$_POST["spass"]."',class_ID='".$_POST["class"]."' where S_code='".$_POST["scode"]."'";
                        mysqli_query($con, $update) or die(mysqli_error());
                        echo "<script>document.getElementById('show').innerHTML='Updated successfully';</script>";
                        echo "<script>document.getElementById('clic').innerHTML='Click here';</script>";
                        }

                        $query = "SELECT * FROM student WHERE S_code='".$_GET["scodee"]."'"; 

                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);

                        ?>
                        <tr>
                        <div>
                        <form name="form" method="post" action=""> 
                      
                        
                        <td> 
                        <input name="scode" type="text" value="<?php echo $row['S_code'];?>">
                        </td> 

                        <td>
                            <input type="text" name="sname" style="width:140%" placeholder="Name" required value="<?php echo $row['S_name'];?>" >
                       </td>

                        <td>
                            <input type="password" name="spass" style="width:50%" placeholder="Password"  required value="<?php echo $row['S_password'];?>" >
                       </td>

                       <td>
                       <select type="text" id="type" style="border:0; width:80%; border:1; text-align:center" required >
                        <option></option>
                                      <?php
                                        $result=mysqli_query($con, "SELECT * FROM `branch` where dept_ID=3");
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
                        <option value="">Class</option>
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
















