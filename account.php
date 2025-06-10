<?php
$conn=new mysqli('localhost','root','','school');
if(isset($_POST['create'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert=mysqli_query($conn,"INSERT INTO users()VALUES(NULL,'$username','$password')");
    if($insert){
        die("well you create account");
    }
    else{
        die("fail to create account");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <center><div class="card"><h>WELCOME ON MY HOME PAGE!!!!</h></div></center>
    <div class="link">
<a href="view.php">REPORT OF STUDENTS</a>
<a href="signup.php">REGISTRATIO FORM OF STUDENT</a>
<a href="account.php">Create your account</a>
</div>
  <center><div class="acount">
    <h1>CREATE YOUR ACCOUNT</h1>
    <form action="" method="post" class="forms">
        <input type="text" name="username" placeholder="enter your username"><br><br>
        <input type="password" name="password" placeholder=" enter your password"><br><br>
        <button name="create">create</button>
    </form>
  </div></center>  
</body>
</html>