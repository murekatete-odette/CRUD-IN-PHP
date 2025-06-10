<?php
$conn=new mysqli('localhost','root','','school');
$new_id=$_GET['delete_value'];
$delete=mysqli_query($conn,"DELETE FROM students WHERE id='$new_id'");
if($delete){
    header("location:view.php");
}
else{
    die("fail to delete");
}
?>