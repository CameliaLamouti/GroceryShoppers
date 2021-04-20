<?php
function checkifexist($email){
$link = mysqli_connect("localhost","root","root");
mysqli_select_db("soen287", $link);    

$result = mysqli_query("SELECT email FROM userlist where email ='".$email."' ", $link);
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
?>

<?php 
$input = 'email';
if(checkifexist($email))
{
echo "<style color:green> You have succesfully signed in !</style> ";
header("location: ../html/index.html");
}
?>