<?php
$db_host="localhost";
$db_user="root";
$db_password="Shankar@1234!";
$db_name="osms_db";
$db_port=3306;

// Create connection
$con=new mysqli($db_host,$db_user,$db_password,$db_name,$db_port);
if($con->connect_error){
    die("Connection failed");
}
/*
else{
  echo "Connection success";
}
*/
?>