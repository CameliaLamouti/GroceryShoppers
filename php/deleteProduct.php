<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from productlist where id=$id");
?>

<script type="text/javascript">
window.location = "productlist.php";
</script>