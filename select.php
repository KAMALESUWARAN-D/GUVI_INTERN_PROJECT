<?php
session_start();
$con=mysqli_connect("localhost","root","","registration");
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$sql="SELECT * from users WHERE name='$uname' and pwd1='$pwd' ";
$query=mysqli_query($con,$sql);
$num_rows=mysqli_num_rows($query);
if(mysqli_query($con,$sql)){
    header("location:Profile.php");
} 
else{
    header("location:login.php");

}


?>