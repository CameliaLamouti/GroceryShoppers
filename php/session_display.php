<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>PHP SESSION Display</title>
    </head>
    <body>
        <h1>Session value display </h1>
        <?php
            echo "Name: ".$_SESSION["name"]."<br />";
            echo "Email: ".$_SESSION["email"]."<br />";
        ?>
    </body>
</html>