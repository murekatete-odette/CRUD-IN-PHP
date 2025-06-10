<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="view">
    <center><div class="card"><h>WELCOME ON MY HOME PAGE!!!!</h></div></center>
    <div class="link">
<a href="view.php">REPORT OF STUDENTS</a>
<a href="signup.php">REGISTRATIO FORM OF STUDENT</a>
<a href="account.php">Create your account</a>
</div>
    <center>
        <h1>REPORT OF STUDENTS</h1>
        <table border="1">
            <tr>
                <th>STUDENT_ID</th>
                <th>FIRST_NAME</th>
                <th>LAST_NAME</th>
                <th>DATE OF BIRTH</th>
                <th>LOCATION</th>
                <th>TRADE</th>
                <th>LEVEL</th>
                <th>PHONE</th>
                <th colspan="2">OPTION</th>
            </tr>
            <?php 
            $conn=new mysqli('localhost','root','','school');
            $select=mysqli_query($conn,"SELECT * FROM students");
           while($row=mysqli_fetch_array($select)){
            ?>
       <tr>
          <td><?php echo $row['id']?></td>
           <td> <?php echo $row['fname']?></td>
            <td> <?php echo $row['lname']?></td>
            <td> <?php echo $row['dob']?></td>
           <td> <?php  echo $row['location']?></td>
           <td> <?php echo $row['trade']?></td>
           <td> <?php  echo $row['level']?></td>
          <td> <?php   echo $row['phone']?></td>
          <td> <a href="delete.php?delete_value=<?php echo $row['id']?>">delete</a></td>
          <td> <a href="update.php?update_value=<?php echo $row['id']?>">update</a></td>
           </tr>
            <?php } ?>
        </table><br><br>
        <p>here you add other student: <a href="signup.php">ADD</a></p>
    </center>
    </div>
</body>
</html>