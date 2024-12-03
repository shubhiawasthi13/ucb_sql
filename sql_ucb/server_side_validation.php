<?php
$errors = array();

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];

if(empty($firstName)){
    array_push($errors, "username is required");
}else{
    echo $firstName;
}

if(!preg_match("/^[a-zA-Z0-9_]*$/",$lastName)){
    array_push($errors, "only alphabates, numbers and underscrores are allowed for last name");
}else{
    echo $lastName;
}

$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
if(!preg_match($pattern,$email)){
    array_push($errors, "Invalid email ID formate");
}else{
    echo $email;
}

if(strlen($password) != 8){
    array_push($errors, "please provide password 6 digits! ");
}else{
    echo $password;
}

if(count($errors) > 0){
    foreach($errors as $error){
        echo $error . '<br>';
    }
}else{
    echo $firstName , $lastName, $email ,$mobile ,$password,$subject ,$comment;
}

?>