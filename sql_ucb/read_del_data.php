<?php
include("./conn.php");
$get_data = "SELECT * FROM users";
$result = mysqli_query($conn,$get_data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read data</title>
</head>
<body>
  <center>
  <table border="10" width ="50%" cellspacing = "0" cellpadding = "10">
    <h2>USERS DATA</h2>
        <tr style = "background-color:gray">
            <th style = "color:white">Name</th>
            <th style = "color:white">Email</th>
            <th style = "color:white">City</th>
            <th style = "color:white">Mobile</th>
            <th style = "color:white">Delete</th>
  
           
        </tr>
        <tr <?php foreach($result as $data){?>>
            <td><?php echo $data['username']?></td>
            <td><?php echo $data['email']?></td>
            <td><?php echo $data['city']?></td>
            <td><?php echo $data['mobile']?></td>

            <td>
              <form method= "post">
                <button name= "delete" value = "<?php echo $data['id']?>">Delete</button>
              </form>
            </td>

        </tr <?php }?>>
    </table>
  </center>
</body>
</html>

<?php
if(isset($_POST['delete'])){
  $id = $_POST['delete'];

  $delete_data = "DELETE FROM users WHERE id='$id'";
  $result = mysqli_query($conn,$delete_data);
  if($result){
    echo  "<script>alert('data deleted successfully')</script>";
    header("Refresh:0");
  }

}
?>