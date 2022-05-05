<?php
$serverName = "BARAN\SQL";
$connectionInfo = array("Database"=>"feedback");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if($conn){
    echo "connection established.<br />";
}
else{
    echo "connection could not be established.<br />";
    die(print_r(sqlsrv_errors(),true));
}



?>