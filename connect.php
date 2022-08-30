<?php
session_start();
$con=mysqli_connect("localhost","root","","registration");
$name =$_POST['name'];
$email=$_POST['email'];
$number =$_POST['number'];
$pwd1=$_POST['pwd1'];
$pwd2=$_POST['pwd2'];
$sql="INSERT INTO users (name ,email,number,pwd1,pwd2) VALUES ('$name','$email','$number','$pwd1','$pwd2')";
if(mysqli_query($con,$sql)){
    header("location:Profile.php");
    $_SESSION["uname"]=$name;
    $_SESSION["email"]=$email;
    $_SESSION["number"]=$number;            
} 
else{  
    echo "Error occured";
}

?>