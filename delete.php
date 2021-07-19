<?php 
include 'connection.php';
$id= $_GET['id'];
echo $id;
$delete= "DELETE FROM `data` WHERE id=$id";
$delete_run= mysqli_query ($conn,$delete);
if($delete_run){
  echo 'data deleted';
}
else{
  echo 'data not deleted';
}
header('location:display.php');
