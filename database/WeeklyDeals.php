<?php
include "../php/connection.php";
?>
<?php
    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    }


    $res=mysqli_query($link,"SELECT * FROM productlist WHERE Sale IS NOT NULL");
    
    while($reslt = mysqli_fetch_array($res)){
        echo $reslt["Product"] . "</br>";
        echo "<img src='Image/".$row['Image']."' />";
        echo $reslt["Price"] . "</br>";
        echo $reslt["Sale"] . "</br>";
    }


?>

