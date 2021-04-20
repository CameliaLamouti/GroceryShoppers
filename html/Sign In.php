<?php
include "../php/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../javascript/script.js" defer></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
        
    </head>
    <body>
        <div id="nav-placeholder"></div>
        
        <!--NavBar-->
        <script>
            $(function(){
                $("#nav-placeholder").load("navbar.html");
            });
        </script>

<main>
  <!-- FORM HERE WHICH LINKS TO SIGN UP-->
  <div class="bg-img">
    
    <div class="form">
        
        <form>
            <div>
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" id="email" required onfocusout="validateEmail()">
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required>
          
              <button type="submit" onclick = "signIn()" name="signIn">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
                    
            <div style="background-color:#f1f1f1">
              <span class="psw"><a href="PasswordReset.php">Forgot password?</a></span>     
            
              <span class="signup">Don't have an account? <a href="Sign Up.php">Sign Up</a></span>
              
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
    if(isset($_POST["signIn"]))
    {
      function checkifexist($email){
        
        $result = mysqli_query($link,"SELECT column FROM userlist where column ='".$email."' ");
        $num_rows = mysqli_num_rows($result);
        
        if($num_rows > 0)
        {
        return true;
        }
        else
        {
        return false;
        }
        } 
        
        $input = $email;
        if(checkifexist($input)=='true')
        {
        echo "You have succesfully signed in !";
        }

    }
    ?>


</html>