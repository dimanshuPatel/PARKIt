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
$number = $_POST["cnum"]; 
$ed = $_POST["date"];
$cvv = $_POST["cvv"];
$email = $_POST["email"];
$sql = "SELECT * FROM `payment` WHERE email ='$email' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num==1){
    echo    "<script> alert('Already Pay!!')</script>";
}
else{
    $sql ="INSERT INTO `payment` (`number`, `ed`, `cvv`, `email`) VALUES ('$number', '$ed', '$cvv', '$email')";
    $result = mysqli_query($conn,$sql);
    if($num == $result){
        echo    "<script> alert('Payment Success!!') </script>";
        header("location: http://localhost/Park_It/home.php?");
    }
    else{
        echo    "<script> alert('Sorry!Try again.')</script>";
    }
    
}
}
?>