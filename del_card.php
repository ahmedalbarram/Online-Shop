<?php

include("config1.php");

$ID = $_GET['id'];
mysqli_query($con," DELETE From addcard where id = $ID");
header("location: card.php");

?>