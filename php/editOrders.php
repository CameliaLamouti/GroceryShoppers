<?php
include "connection.php";
$id=$_GET["id"];

$orderNb="";
$preTaxCost="";
$postTaxCost="";
$orderSummary="";

$res=mysqli_query($link, "select * from orderlist where id=$id");
while($row=mysqli_fetch_array($res))
{
    $orderNb=$row["orderNb"];
    $preTaxCost=$row["preTaxCost"];
    $postTaxCost=$row["postTaxCost"];
    $orderSummary=$row["orderSummary"];
}

?>

<html lang="en">

<head>
  <title>Edit Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
</head>

<body>
    <div class="container">
    <div class="col-lg-4">
    <h2>Edit Order</h2>
    <form action="" name="form1" method="POST">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter orderNb" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
        <label for="orderNb">Order Number:</label>
        <input type="text" class="form-control" id="orderNb" placeholder="Enter orderNb" name="orderNb" value="<?php echo $orderNb; ?>">
        </div>
        <div class="form-group">
        <label for="preTaxCost">preTaxCost:</label>
        <input type="text" class="form-control" id="preTaxCost" placeholder="Enter preTaxCost" name="preTaxCost" value="<?php echo $preTaxCost; ?>">
        </div>
        <div class="form-group">
        <label for="postTaxCost">postTaxCost:</label>
        <input type="text" class="form-control" id="postTaxCost" placeholder="Enter postTaxCost" name="postTaxCost" value="<?php echo $postTaxCost; ?>">
        </div>
        <div class="form-group">
        <label for="orderSummary">orderSummary:</label>
        <input type="text" class="form-control" id="orderSummary" placeholder="Enter orderSummary" name="orderSummary" value="<?php echo $orderSummary; ?>">
        </div>
        <button type="submit" name="update" class="btn btn-default">Update</button>
    </form>
    </div>
    </div>
</body>

<?php
if(isset($_POST["update"]))
{
    mysqli_query($link,"update orderlist set email='$_POST[email]',orderNb='$_POST[orderNb]', preTaxCost='$_POST[preTaxCost]', postTaxCost='$_POST[postTaxCost]', orderSummary='$_POST[orderSummary]' where id=$id");
    header("location: orderlist.php");
    $updatemsg = "This is a confirmation that your order has been updated to : ";
    $updatemsg2 = ". New price post tax is: ";
    $orderSummary = $_POST[orderSummary];
    $postTaxCost = $_POST[postTaxCost];
    $email = $_POST[email];
    $msg = $updatemsg . $orderSummary . $updatemsg2 . $postTaxCost;
    mail($email, "Order Update Confirmation", $msg);
}
?>

</html>