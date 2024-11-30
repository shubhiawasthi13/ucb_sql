<?php
include("./conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
     <form action="" method= "post">
        <h3>Registration Form</h3>
        <input type="text", name="username", id = "username" placeholder="enter your name" required/>
        <!-- <span id="name-error" class="error-message"></span> -->
        <br>
        <br>
        <input type="email", name="email",id = "email" placeholder="enter your email" required>
        <!-- <span id="email-error" class="error-message"></span> -->
        <br>
        <br>
        <input type="text", name="city",id = "city"  placeholder="enter your city" required/>
        <!-- <span id="city-error" class="error-message"></span> -->
        <br>
        <br>
        <input type="text", name="mobile",id = "mobile"  placeholder="enter your number " pattern="[0-9]{10}" title="enter 10 digit" required/>
        <!-- <span id="mobile-error" class="error-message"></span> -->
        <br>
        <br>
        <input type="submit" class="btn" name="submit" value="submit">
     </form>
    </center>
    <?php
    function test_val($data){
        $data =trim($data);
        $data =stripslashes($data);
        $data =htmlspecialchars($data);
        return $data;
    }

     if(isset($_POST['submit'])){
        $username =test_val($_POST['username']);
        $email =test_val($_POST['email']);
        $city =test_val($_POST['city']);
        $mobile =test_val($_POST['mobile']);

        $insert_data = "INSERT INTO users (username,email,city,mobile) VALUES ('$username','$email','$city','$mobile')";
        if(mysqli_query($conn,$insert_data)){
           echo  "<script>alert('data inserted successfully')</script>";
           echo "<script>window.location.href='read_del_data.php'</script>";
        }
        else{
            echo "Error: " . $insert_data . "<br>" . mysqli_error($conn);
        
        }

    }
    ?>
    

</body>
</html>