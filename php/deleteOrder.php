<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from orderlist where id=$id");
?>

<script type="text/javascript">
window.location = "orderlist.php";
</script>