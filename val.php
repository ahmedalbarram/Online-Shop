<?php
include("config1.php");
$ID = $_GET['id'];
$up = mysqli_query($con," select * from prod where id = $ID");
$data = mysqli_fetch_array($up);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تاكيد شراء المنتج</title>
    <style>
        input {
            display: none;
        }
        .main {
            width: 35%;
            box-shadow: 1px 1px 10px silver;
            margin-top: 50px;
        }
        h2 {
            padding: 10px;
        }
        button {
            margin: 5px;
            background-color: #ffa22e;
            color: white;
            border: none;
            padding: 10px;
        }
        a {
            text-decoration: none;
            color: white;
            margin-bottom: 10px;
        }
        a:hover {
            color: white;
        }
        .btn-primary {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert_card.php" method="post">
                <h2>هل فعلا تريد شراء المنتج</h2>
                <input type="text" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" name="name" value="<?php echo $data['name'] ?>" >
                <input type="text" name="price" value="<?php echo $data['price'] ?>" >
                <button name="add" type="submit" >تاكيد اضافة المنتج للعربة</button>
                <br>
                <button type="button" class="btn btn-primary"><a href="shop.php">الرجوع الي صفحة المنتجات</a></button>
            </form>
        </div>
        <br><br><br>
        
    
    </center>

</body>
</html>
