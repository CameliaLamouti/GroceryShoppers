<?php
include "connection.php";
$id=$_GET["id"];

$Product="";
$Image="";
$Inventory="";
$Price="";
$Sale="";
$Description="";

$res=mysqli_query($link, "select * from productlist where id=$id");
while($row=mysqli_fetch_array($res))
{
    $Product=$row["Product"];
    $Image=$row["Image"];
    $Inventory=$row["Inventory"];
    $Price=$row["Price"];
    $Sale=$row["Sale"];
    $Description=$row["Description"];
}

?>

<html lang="en">

<head>
  <title>Product List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
  
  <link rel="stylesheet" href="../css/style2.css">
  <script src="https://kit.fontawesome.com/d27ba70d65.js" crossorigin="anonymous"></script>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  

  <div id="sidebar"></div>
  <script>
  $(function(){
      $("#sidebar").load("sidenavphp.html");
  });
  </script>
</head>

<body>
    <div class="content">
    <div class="col-lg-4">
    <h2>Products</h2>
    <form action="" name="form1" method="POST" enctype="multipart/form-data">
        
        <img src="<?php echo $Image; ?>" height="100" width="100">
        
        <div class="form-group">
        <label for="Product">Product:</label>
        <input type="text" class="form-control" id="Product" placeholder="Enter Product" name="Product" value="<?php echo $Product; ?>">
        </div>
        <div class="form-group">
        <label for="Image">Image:</label>
        <input type="file" class="form-control" name="Image">
        </div>
        <div class="form-group">
        <label for="Inventory">Inventory:</label>
        <input type="text" class="form-control" id="Inventory" placeholder="Enter Inventory" name="Inventory" value="<?php echo $Inventory; ?>">
        </div>
        <div class="form-group">
        <label for="Price">Price</label>
        <input type="text" class="form-control" id="Price" placeholder="Enter Price" name="Price" value="<?php echo $Price; ?>">
        </div>
        <div class="form-group">
        <label for="Sale">Sale Price:</label>
        <input type="text" class="form-control" id="Sale" placeholder="Enter Sale Price" name="Sale" value="<?php echo $Sale; ?>">
        </div>
        <div class="form-group">
        <label for="Description">Description</label>
        <input type="text" class="form-control" id="Description" placeholder="Enter Description" name="Description" value="<?php echo $Description; ?>">
        </div>
        <button type="submit" name="update" class="btn btn-default">Update</button>
    </form>
    </div>
    </div>
</body>

<?php
if(isset($_POST["update"]))
{
    $tm=md5(time());
    $fnm=$_FILES["Image"]["name"];
    if($fnm==""){
        mysqli_query($link,"update productlist set Product='$_POST[Product]', Inventory='$_POST[Inventory]', Price='$_POST[Price]', Description='$_POST[Description]' where id=$id");
    }
    else{
        $dst="../Images/".$tm.$fnm;
        $dst1="Images/".$tm.$fnm;
        move_uploaded_file($_FILES["Image"]["tmp_name"],$dst);
    
        mysqli_query($link,"update productlist set Product='$_POST[Product]', Image='$dst1' ,Inventory='$_POST[Inventory]', Price='$_POST[Price]', Description='$_POST[Description]' where id=$id");
    }

    header("location: productlist.php");
}
?>

</html>
