<?php
$adminName="";
$email="";
$dbname="";
$password="";

$conn=mysqli_connect($adminName,$email,$dbname,$password) or die("Connection Failed");

if(isset($_POST)&!empty($_POST)){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $sql="";
    $result=mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count>0){
        echo '<div style="color:red;"><b>'.$email.'</b>is already taken.</div>';
    }
    else{
        echo '<div style="color:green;"><b>'.$email.'</b>available.</div>';
    }
}


?>