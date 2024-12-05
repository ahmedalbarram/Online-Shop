<?php

include('config1.php');
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM prod WHERE id=$ID");
header('location: products.php')

?>