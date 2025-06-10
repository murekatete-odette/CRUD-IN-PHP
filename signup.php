<?php
$conn=new mysqli('localhost','root','','school');
if(isset($_POST['save'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $location=$_POST['location'];
    $trade=$_POST['trade'];
    $level=$_POST['level'];
    $phone=$_POST['phone'];
    $insert=mysqli_query($conn,"INSERT INTO students VALUES(NULL,'$fname','$lname','$dob','$location','$trade','$level','$phone')");
    if($insert){
        header("location:view.php");
    }
    else{
        die("fail to insert");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="register">
    <center><div class="card"><h>WELCOME ON MY HOME PAGE!!!!</h></div></center>
    <div class="link">
<a href="view.php">REPORT OF STUDENTS</a>
<a href="signup.php">REGISTRATIO FORM OF STUDENT</a>
<a href="account.php">Create your account</a>
</div>
    <center>
        <h1>REGISTRATION FORM OF STUDENT</h1>
        <form action="" method="post">
            <input type="text" name="fname" placeholder="enter first_name"><br><br>
            <input type="text" name="lname" placeholder="enter last_name"><br><br>
            <input type="date" name="dob" placeholder="enter date of birth"><br><br>
            <input type="text" name="location" placeholder="enter your loction"><br><br>
            <input type="text" name="trade" placeholder="enter your trade"><br><br>
            <input type="text" name="level" placeholder="enter your level"><br><br>
            <input type="text" name="phone" placeholder="enter your phone"><br><br>
            <button name='save'>create</button>
        </form>
    </center>
    </div>
</body>
</html>