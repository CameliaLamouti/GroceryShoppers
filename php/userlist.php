<?php
include "connection.php";
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
        <input type="text" class="form-control" id="firstName" placeholder="Enter first name" name="firstName">
        </div>
        <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" class="form-control" id="lastName" placeholder="Enter last name" name="lastName">
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <button type="submit" name="insert" class="btn btn-default">Insert</button>
    </form>
    </div>
    </div>

    <div class="col-lg-12">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $res=mysqli_query($link,"select * from userlist");
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row["id"]; echo "</td>";
                echo "<td>"; echo $row["firstName"]; echo "</td>";
                echo "<td>"; echo $row["lastName"]; echo "</td>";
                echo "<td>"; echo $row["email"]; echo "</td>";
                echo "<td>"; echo $row["password"]; echo "</td>";
                echo "<td>"; ?> <a href="editUser.php?id=<?php echo $row["id"]; ?> "><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
                echo "<td>"; ?> <a href="deleteUser.php?id=<?php echo $row["id"]; ?> "><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";

            }
        ?>
    </tbody>
  </table>
    </div>
</body>

<?php
if(isset($_POST["insert"]))
{
    mysqli_query($link,"insert into userlist values (NULL,'$_POST[firstName]','$_POST[lastName]','$_POST[email]','$_POST[pwd]')");
    ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
}
?>

</html>
