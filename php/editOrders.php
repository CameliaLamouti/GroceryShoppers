<?php
include "connection.php";
$id=$_GET["id"];

$orderNb="";
$preTaxCost="";
$postTaxCost="";
$orderSummary="";

$res=mysqli_query($link, "select * from orders where id=$id");
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
  <title>Edit User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
</head>

<body>
    <div class="container">
    <div class="col-lg-4">
    <h2>Order</h2>
    <form action="" name="form2" method="POST">
        <div class="form-group">
        <label for="orderNb">OrderNb:</label>
        <input type="text" class="form-control" id="orderNb" placeholder="Enter order Nb" name="orderNb">
        </div>
        <div class="form-group">
        <label for="preTaxCost">Pre-tax cost:</label>
        <input type="text" class="form-control" id="preTaxCost" placeholder="Enter pre-tax cost" name="preTaxCost">
        </div>
        <div class="form-group">
        <label for="postTaxCost">Email:</label>
        <input type="text" class="form-control" id="postTaxCost" placeholder="Enter postTaxCost" name="postTaxCost">
        </div>
        <div class="form-group">
        <label for="orderSummary">Order Summary:</label>
        <input type="test" class="form-control" id="orderSummary" placeholder="Enter order summary" name="orderSummary">
        </div>
        <button type="submit" name="insert" class="btn btn-default">Insert</button>
    </form>
    </div>
    </div>
</body>

<?php
if(isset($_POST["update"]))
{
    mysqli_query($link,"update orders set orderNb='$_POST[orderNb]', preTaxCost='$_POST[preTaxCost]', postTaxCost='$_POST[postTaxCost]', orderSummart='$_POST[orderSummary]' where id=$id");
    header("location: orderlist.php");
}
?>

</html>