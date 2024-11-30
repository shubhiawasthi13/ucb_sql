<?php
$host = "localhost";
$username = "root";
$password = null;

$conn = mysqli_connect($host,$username,$password);
if(!$conn){
    die("connection failed:" . mysqli_connect_error());

}



// create database
$sql = "CREATE DATABASE ucb";
if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}
else{
    die("Error creating database: " . mysqli_error($conn));
}
mysqli_close($conn);
?>