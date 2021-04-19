<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>ProductList </title>
        
        <style>
            body{
                background: white;
                
            }
        </style>
    </head>
    <body>



<?php

<?php 
        require_once("prod.php");

        $checkbox = $_POST['agree'];
        $orderNumber = $_POST['OrderNumber'];
        $itemName = $_POST['ItemName'];
        $firstName = $_POST['FirstName'];
        $lastName = $_POST['LastName'];
        $emailAddress = $_POST['EmailAddress'];
        $phoneNumber = $_POST['PhoneNumber'];
        $comments = $_POST['comments'];

        if(empty($_POST['submit'])){
            session_start();
            $_SESSION['agree']="";
            $_SESSION['OrderNumber']="";
            $_SESSION['ItemName']="";
            $_SESSION['FirstName']="";
            $_SESSION['LastName']="";
            $_SESSION['EmailAddress']="";
            $_SESSION['PhoneNumber']="";
            $_SESSION['comments']="";
            require("ContactUs.php");
        }
        elseif($_POST['submit'] == "enter"){
            session_start();

        

        echo "<h1> Information </h1>";
        echo 'Choice:' . $checkbox . "<br />";
        echo 'Order Number:' . $orderNumber . "<br />";
        echo 'Item Name: ' .$itemName . "<br />";
        echo 'First Name: ' . $firstName . "<br />";
        echo 'Last Name: ' . $lastName . "<br />";
        echo 'Email Address:' . $emailAddress . "<br />";
        echo 'Phone number:' . $phoneNumber . "<br />";
        echo 'Comments:' . $comments . "<br />";

        echo "<p> Thank you for your information we will contact you soon! </p>";

        echo '<p><a href="sign Up.html">Not an existing user? Sign Up here!</a></p>';
        end_session();
        }
        ?>


?>