<?php
$showAlert = false;
$login = false;
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

$email = $_POST['loginEmail'];
$password = $_POST['loginPassword'];
$sql = "SELECT * FROM `users` WHERE email = '$email' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if($num==1){
 while($row = mysqli_fetch_array($result)){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['sno'] = $row['sno'];
    $_SESSION['email'] = $email;
            echo "logged in " .$email;
            header("location: http://localhost/Park_It/home.php?");
        

        }
        
    } 
   // header("location: http://localhost/forum/index.php");
    
 
}

?>


