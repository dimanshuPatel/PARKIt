<?php
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
$name = $_POST['name'];
$number = $_POST['vno'];
$cnumber = $_POST['cno'];
$sql = "SELECT * FROM `booking` WHERE number='$vno' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num==1){
    echo    "<script> alert('You have already Submitted!!')</script>";
}
else{
    $sql ="INSERT INTO `booking` (`uname`, `number`, `cnumber`) VALUES ( '$name', '$number', '$cnumber')";
    $result = mysqli_query($conn,$sql);
    if($number == $result){
        echo    "<script> alert('Your Slot has been Booked!!')</script>";
        header("location: http://localhost/Park_It/payment.php?");
    }
    else{
        echo    "<script> alert('Sorry!Try again.')</script>";
    }
}
}
?>