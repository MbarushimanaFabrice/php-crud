<?php 
include "connection.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "SELECT * FROM `info` WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
<!-- we need water light css to style this form -->
<link rel="stylesheet" href="style.css"> 
</head>
<body>
    <form action="" method="post">
     <label for="">First Name:</label>
    <input type="text" value="<?php echo $row['fname'] ?>" name="first_name">
    <label for="">Second Name</label>
    <input type="text" value="<?php echo $row['lname'] ?>" name="last_name">
    <label for="">Address</label>
    <input type="text" value="<?php echo $row['location'] ?>" name="address">
    <button name="submit">Submit</button> 
    </form>

</body>
</html>

<?php
if(isset($_POST['submit'])){

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $address=$_POST['address'];
    $sql="UPDATE `info` SET fname='$first_name', lname='$last_name',location='$address' WHERE id='$id'";
    $query=mysqli_query($conn,$sql);
    if($query){
        header("location:display.php");

    }else{
        echo "error".$conn->error;
    }
    
}
?>