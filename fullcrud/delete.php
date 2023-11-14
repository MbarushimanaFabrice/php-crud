<?php
include "connection.php";
if(isset($_GET['id']))
$id=$_GET['id'];

$sql="DELETE  FROM `info` WHERE id='$id'";
$query=mysqli_query($conn,$sql);
if($query){
    header("location:display.php");
}else{
    echo "error".$conn->error;
}
?>