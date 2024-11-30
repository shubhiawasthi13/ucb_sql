<?php
$host = "localhost";
$username = "root";
$password = null;
$db = "ucb";
$conn = mysqli_connect($host,$username,$password,$db);
if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}else{
    // echo"connected";
}
?>