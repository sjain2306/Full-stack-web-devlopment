<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM `users` WHERE id=$id";
if(mysqli_query($conn,$sql)){
    echo "Record Deleted successfully for ID= $id";
    header("Location:details.php");
}
else{
    echo "Deletion failed...";
}
?>