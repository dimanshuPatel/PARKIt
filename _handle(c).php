<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "parkit";

$conn = mysqli_connect("localhost", "root","");
if(!$conn){
    die("Error to connect".mysql_error());
}
mysqli_select_db($conn,"parkit");
$name = $_POST["uname"];
$email = $_POST["email"];
$mesg = $_POST["mesg"];
$sql = "SELECT * FROM `contact` WHERE name = '$name' or email = '$email'";
//$sql = "SELECT * FROM `contact` WHERE name = '$name' or email = '$email'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num==1){
    echo    "<script> alert('You have already Submitted!!')</script>";
}
else{
$sql ="INSERT INTO `contact` (`name`, `email`, `mesg`) VALUES ('$username', '$email',    '$mesg')";
$result = mysqli_query($conn,$sql);
if($username == $result){
    echo    "<script> alert('Thank you for Response!!')</script>";
    header("location: http://localhost/Park_It/home.php?");
}
else{
    echo    "<script> alert('Sorry!Try again.')</script>";
}
}
}
?>