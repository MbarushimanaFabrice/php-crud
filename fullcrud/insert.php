<?php
include "connection.php";
if(isset($_POST['submit'])){

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $address=$_POST['address'];
    $insert="INSERT INTO `info` VALUES('','$first_name','$last_name','$address') ";
    $query=mysqli_query($conn,$insert);
    if($query){
        header("location:display.php");
    }else{
        echo "error".$conn->error;
    }
    
}
?>