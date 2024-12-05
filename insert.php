<?php

include("config1.php");

if (isset( $_POST["upload"] )) {
    $NAME = $_POST["name"];
    $PRICE = $_POST["price"];
    $IMAGE = $_FILES["image"];
    $image_lcation = $_FILES["image"] ["tmp_name"];
    $image_name = $_FILES["image"] ["name"];
    $image_up = "photos/".$image_name;
    $insert = "INSERT INTO prod (name, price, image) VALUES ('$NAME', '$PRICE', '$image_up')";
    mysqli_query($con, $insert);
    if (move_uploaded_file($image_lcation, "photos/".$image_name)) {
        echo "<script>alert('تم رفع المنتج بنجاح')</script>";
    }else {
       echo  "<script>alert('حدثت مشكله لم يتم رفع المنتج')</script>";
    }
    header("location: index.php");
}
?>