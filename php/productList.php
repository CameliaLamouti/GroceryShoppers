<?php
include "connection.php";
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
        <div class="form-group">
        <label for="Product">Product:</label>
        <input type="text" class="form-control" id="Product" placeholder="Enter Product" name="Product">
        </div>
        <div class="form-group">
        <label for="Image">Image:</label>
        <input type="file" class="form-control" name="Image">
        </div>
        <div class="form-group">
        <label for="Inventory">Inventory:</label>
        <input type="text" class="form-control" id="Inventory" placeholder="Enter Inventory" name="Inventory">
        </div>
        <div class="form-group">
        <label for="Price">Price</label>
        <input type="text" class="form-control" id="Price" placeholder="Enter Price" name="Price">
        </div>
        <div class="form-group">
        <label for="Sale">Sale Price</label>
        <input type="text" class="form-control" id="Sale" placeholder="Enter Sale Price" name="Sale">
        </div>
        <div class="form-group">
        <label for="Description">Description</label>
        <input type="text" class="form-control" id="Description" placeholder="Enter Description" name="Description">
        </div>
        <button type="submit" name="insert" class="btn btn-default">Insert</button>
    </form>
    </div>
    

    <div class="col-lg-12">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Product</th>
        <th>Image</th>
        <th>Inventory</th>
        <th>Price</th>
        <th>Sale Price</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $res=mysqli_query($link,"select * from productlist");
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row["id"]; echo "</td>";
                echo "<td>"; echo $row["Product"]; echo "</td>";
                echo "<td>"; ?> <img src="<?php echo $row["Image"];?>" height="100" width="100"> <?php echo "</td>";
                echo "<td>"; echo $row["Inventory"]; echo "</td>";
                echo "<td>"; echo $row["Price"]; echo "</td>";
                echo "<td>"; echo $row["Sale"]; echo "</td>";
                echo "<td>"; echo $row["Description"]; echo "</td>";
                echo "<td>"; ?> <a href="editProduct.php?id=<?php echo $row["id"]; ?> "><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
                echo "<td>"; ?> <a href="deleteProduct.php?id=<?php echo $row["id"]; ?> "><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";

            }
        ?>
    </tbody>
  </table>
    </div>
    </div>
</body>

<?php
if(isset($_POST["insert"]))
{
    $tm=md5(time());
    $fnm=$_FILES["Image"]["name"];
    $dst="../Images/".$tm.$fnm;
    $dst1="Images/".$tm.$fnm;
    move_uploaded_file($_FILES["Image"]["tmp_name"],$dst);

    mysqli_query($link,"insert into productlist values (NULL,'$_POST[Product]','$dst1','$_POST[Inventory]','$_POST[Price]', '$_POST[Sale]', '$_POST[Description]')");
    ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
}
?>

</html>
