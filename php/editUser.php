<?php
include "connection.php";
$id=$_GET["id"];

$firstName="";
$lastName="";
$email="";
$password="";

$res=mysqli_query($link, "select * from userlist where id=$id");
while($row=mysqli_fetch_array($res))
{
    $firstName=$row["firstName"];
    $lastName=$row["lastName"];
    $email=$row["email"];
    $password=$row["password"];
}

?>

<html lang="en">

<head>
  <title>User List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
</head>

<body>
    <div class="container">
    <div class="col-lg-4">
    <h2>User</h2>
    <form action="" name="form1" method="POST">
        <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" class="form-control" id="firstName" placeholder="Enter first name" name="firstName" value="<?php echo $firstName; ?>">
        </div>
        <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" class="form-control" id="lastName" placeholder="Enter last name" name="lastName" value="<?php echo $lastName; ?>">
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $password; ?>">
        </div>
        <button type="submit" name="update" class="btn btn-default">Update</button>
    </form>
    </div>
    </div>
</body>

<?php
if(isset($_POST["Update"]))
{
    mysqli_query($link,"update userlist set firstName='$_POST[firstName]', lastName='$_POST[lastName]', email='$_POST[email]', password='$_POST[password]')");
    ?>
    <script type="text/javascript">
    window.location.href=userlist.php;
    </script>
    <?php
}
?>

</html>