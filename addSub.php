

<?php

include("connection.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $sub =$_REQUEST['sub'];
    $dept =$_REQUEST['dep'];
    $ins_query="insert into subject values(NULL,'$sub','$dept')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    header('location:subject.php');
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
                   <h1>Subjects</h1>
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
                        <th><strong>Subject ID</strong></th>
                        <th><strong>Subject Name</strong></th>
                        <th><strong>department Name</strong></th>
                        <th><strong>Edit</strong></th>
                        <th><strong>Delete</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        session_start();
                        $sel_query="SELECT subject.Sub_ID , subject.Sub_name, subject.dept_ID, department.dept_name FROM subject,department
                        WHERE subject.dept_ID = department.dept_ID AND department.dept_ID = '$_SESSION[dept]'";
                        $result = mysqli_query($con,$sel_query);
                        while($row = mysqli_fetch_assoc($result)) { ?>

                        <td align="center"><?php echo $row["Sub_ID"]; ?></td>
                        <td align="center"><?php echo $row["Sub_name"]; ?></td>
                        <td align="center"><?php echo $row["dept_name"]; ?></td>
                        <td align="center">
                        <a href="edit.php?id=<?php echo $row["Sub_ID"]; ?>">Edit</a>
                        </td>
                  
                        <td align="center">
                        <a href="delete.php?id=<?php echo $row["Sub_ID"]; ?>">Delete</a>
                        </td>
                        </tr>
                        <?php  } ?>

                        <div id="insert">
          
                            <form name="form" method="post" action=""> 
                            <input type="hidden" name="new" value="1" >
                            <tr >
                                <td></td>
                            <td id="tdadd"><input type="text" name="sub" placeholder="Enter a Subject" id="add" style="border:0" required></td>
                            <td id="tdadd">
                            <select type="text" name="dep" id="add" style="border:0; width:50%; text-align:center" required >
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



















