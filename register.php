<?php
include 'connection.php';
    
    $name =$_POST["name"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $phno=$_POST["phno"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];

    if($password==$cpassword)
    {  
        $q1="insert into register (name,username,email,phno,password) values ('$name','$username','$email','$phno','$password')";
        $r1=mysqli_query($connection,$q1);
     
        if($r1)
        {
            session_start(); 
            header("location:home.html");
            $_SESSION["email"]=$email;
            $_SESSION["set"]=TRUE;
        }
    }
    else
    {
        die("Error in regestring");
    }
?>