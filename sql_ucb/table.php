<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "ucb";

$conn = mysqli_connect($host,$username,$password,$db);
if(!$conn){
    die("connection failed:" . mysqli_connect_error());

}

$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username varchar(30) NOT NULL,
email varchar(50),
city varchar(30) NOT NULL
)";

if(mysqli_query($conn, $sql)){
    echo "table created successfully";
}
else{
    die("Error creating table: " . mysqli_error($conn));
}
mysqli_close($conn);
?>