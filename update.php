<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn=new mysqli('localhost','root','','school');
    $put=$_GET['update_value'];
    $select=mysqli_query($conn,"SELECT * FROM students WHERE id='$put'");
    while($data=mysqli_fetch_array($select)){
    ?>
    <center>
        <h1>UPDATE STUDENT FORM</h1>
        <form action="" method="post">
    <input type="text" name="id" value="<?php echo $data['id']?>"><br><br>
    <input type="text" name="fname" value="<?php echo $data['fname']?>"><br><br>
    <input type="text" name="lname" value="<?php echo $data['lname']?>"><br><br>
    <input type="date" name="dob" value="<?php echo $data['dob']?>"><br><br>
    <input type="text" name="location" value="<?php echo $data['location']?>"><br><br>
    <input type="text" name="trade" value="<?php echo $data['trade']?>"><br><br>
    <input type="text" name="level" value="<?php echo $data['level']?>"><br><br>
    <input type="text" name="phone" value="<?php echo $data['phone']?>"><br><br>
    <button name="put">update</button>
        </form>
    <?php
    }
    if(isset($_POST['put'])){
          $fname=$_POST['fname'];
            $lname=$_POST['lname'];
           $dob=$_POST['dob'];
            $location=$_POST['location'];
            $trade=$_POST['trade'];
             $level=$_POST['level'];
            $phone=$_POST['phone']; 
            $update=mysqli_query($conn,"UPDATE students SET fname='$fname',lname='$lname',dob='$dob',location='$location',trade='$trade',level='$level',phone='$phone' WHERE id='$put'"); 
            if($update){
                header("location:view.php");
            }
            else{
                die("fail to update");
            }
    }
    ?>
    </center>
</body>
</html>