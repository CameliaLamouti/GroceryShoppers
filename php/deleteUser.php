<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from userlist where id=$id");
?>

<script type="text/javascript">
window.location = "userlist.php";
</script>