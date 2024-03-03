<?php
//Script to connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "parkit";

$conn = mysqli_connect("localhost", "root","");
if(!$conn){
    die("Error to connect".mysql_error());
}
mysqli_select_db($conn,"parkit");     

?> 
