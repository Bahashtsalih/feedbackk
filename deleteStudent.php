<?php
require('connection.php');
$query = "DELETE FROM student WHERE S_code='" . $_GET["scode"] . "'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: student.php"); 
?>