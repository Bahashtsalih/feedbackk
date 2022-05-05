<?php
require('connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM subject WHERE Sub_ID=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: subject.php"); 
?>