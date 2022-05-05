<?php
require('connection.php');
$query = "DELETE FROM teacher WHERE T_ID='" . $_GET["tid"] . "'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: teacher.php"); 
?>