<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../javascript/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
  <div id="nav-placeholder"></div>
  <script>
  $(function(){
  $("#nav-placeholder").load("navbar.html");
  });
  </script>
    
    <main>

    <!-- FORM HERE WHICH LINKS TO SIGN IN-->
    <div class="bg-img">
    <div class="form">
        <form action="" name="signupform" method="POST">   
            <div>
              <label for="first name"><b>First Name</b></label>
              <input type="text" placeholder="Enter First Name" name="firstName" id="firstName"> 
              <label for="last name"><b>Last Name</b></label>
              <input type="text" placeholder="Enter Last Name" name="lastName" id="lastName"> 
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email"  id="email"  onfocusout="validateEmail()">              
              <label for="email"><b>Confirm Email</b></label>
              <input type="text" placeholder="Re-enter Email" name="confirmEmail" id="confirmEmail">
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pwd" id="pwd">              
              <label for="psw"><b>Confirm Password</b></label>
              <input type="password" placeholder="Re-enter Password" name="confirmPass" id="confirmPass">
              <button type="submit" onclick="createAccount()" name="signUp"id="createAccount_button">Create Account</button>

              <label>
                <input type="checkbox" name="remember" id="checkbox"> I agree to the terms and conditions.
              </label>

              <div style="background-color:#f1f1f1">
                <a href="Sign In.php"><button type="button" class="cancelbtn">Cancel</button> </a>     
              </br>
                <span class="signin">Already have an account? <a href="Sign In.php">Sign In</a></span>
              </div>
            </div>
       </form>
    </div>
  </div>
    
      
  </main>

    <!--Footer-->
    <div id="footer" class="footer"></div>
    <script>
        $(function(){
          $("#footer").load("footer.html");
        });
        </script>

</body>

<?php
if(isset($_POST["signUp"]))
{
  mysqli_query($link,"signUp into userlist values (NULL,'$_POST[firstName]','$_POST[lastName]','$_POST[email]','$_POST[pwd]')");
  header("location: ../html/Sign Up.php");
}
?>
</html>