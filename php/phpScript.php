<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us </title>
    </head>
    <body>


        <?php


        $orderNumber = $_POST['Order Number'];
        $firstName = $_POST['First Name'];
        $lastName = $_POST['Last Name'];
        $emailAddress = $_POST['Email Address'];
        $phoneNumber = $_POST['Phone Number'];

        echo 'Order Number is ' . $orderNumber;
        echo 'First Name is ' . $firstName;
        echo 'Last Name is ' . $lastName;
        echo 'Email Address is ' . $emailAddress;
        echo 'Phone number is ' . $phoneNumber;


        ?>





    </body>
</html>