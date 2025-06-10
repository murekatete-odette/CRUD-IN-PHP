<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>LOGIN FORM</h1>
        <form action="" method="post">
            <input type="text" name="username" placeholder="username"><br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <button name="login">Login</button>
            <p>if you don't have any account create account here: <a href="account.php">Signup</a></p>
        </form>
    </center>
</body>
</html>


<?php  
$conn=new mysqli('localhost','root','','school');
session_start();
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select=mysqli_query($conn,"SELECT*FROM users WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($select)){
    $_SESSION['username']=$username;
        header("location:homepage.php");
}
else{
    die(" you don't have any account");
}
}
?>
