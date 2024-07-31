<?php 
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $num = $_POST['number'];
    $address = $_POST['add'];
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];
     if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
     {
        $query = "insert into form (fname, lname, cnum, address, email, pass) values ('$firstname', '$lastname', '$num', '$address', '$gmail', '$password')";
       
       mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfully Register')</script>";
     }
     else
     {
        echo "<script type='text/javascript'> alert('Please enter some valid inormation')</script>";
     }
    
    
     
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login and Register</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="signup">
        <h1>Sign up</h1>
        <h4>Its free and only takes a minute</h4>
        <form method="post">
            <label>First Name</label>
            <input type="text" name="fname"required>
            <label>Last Name</label>
            <input type="text" name="lname"required>
            <label for="phone">Contact Number</label>
            <input type="text" name="number" onkeyup="val(this)" required>
             <div id="res"></div>
            <label>Address</label>
            <input type="text" name="add"required>
            <label>Email</label>
            <input type="email" name="mail"required>
            <label>Password</label>
            <input type="password" name="pass"required>
            <input  type="submit" name=""value="Submit">
        </form>
        <p>Already have an account? <a href="login.php">Login Here</a></p>
        <p class="home"><a href="index.php">Return to home</a></p>
    </div>
    
    
</body>
<script type="text/javascript">
    document.getElementById("res").style.color = "red";
    function val(elem) {
    
      if (isNaN(elem.value)){
      document.getElementById('res').innerText = "Please enter numbers olny";
    }else{
    document.getElementById('res').innerText = "";
    if (elem.value.length > 10){
    document.getElementById('res').innerText = "Please enter only ten digits";
    }else{
        document.getElementById('res').innerText = "";
        }
        }
    }
    </script>
</html>