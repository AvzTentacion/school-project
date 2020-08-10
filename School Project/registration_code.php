<?php 
require_once("connection.php");
$username = $email = $password = $pwd = $pwd = "";

$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$pwd = mysqli_real_escape_string($conn,$_POST['password']);
$password = MD5($pwd);

$sql = "INSERT INTO users (Username,Email,Password) VALUES ('$username','$email','$password')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location: login.php");
}
else{
    echo "Error :".$sql;
}
?>