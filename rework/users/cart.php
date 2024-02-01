<?php

session_start();

require_once('php/createDb.php');
require_once('php/component.php');

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

$database = new CreateDb(dbname: "user_db", tablename: "cart_item");

if (isset($_POST['add'])) {
    $cart_id = $_POST['cart_id'];
    $stock_status = $database->getStockStatus($cart_id);

    if ($stock_status === 'in-stock') {
        if (isset($_SESSION['cart'])) {
            $item_array_id = array_column($_SESSION['cart'], "cart_id");

            if (in_array($cart_id, $item_array_id)) {
                echo "<script>alert('Product is already added in the cart..!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            } else {
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'cart_id' => $cart_id
                );
                $_SESSION['cart'][$count] = $item_array;
            }
        } else {
            $item_array = array(
                'cart_id' => $cart_id
            );
            $_SESSION['cart'][0] = $item_array;
        }
    } else {
        echo "<script>alert('The product is out of stock and cannot be added to the cart')</script>";
        echo "<script>window.location = 'cart.php'</script>";
    }
}

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $cart_id = $item['cart_id'];
        // Display the in-stock product
        // Your existing code to display the product goes here
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/sidebarw/carstyle.css">
    <style>
        body {
            background-image: url('https://wallpapercave.com/wp/wp4766529.jpg');
        }

        .side-bar {
            background: #1b1a1b;
            width: 250px;
            left: -250px;
            height: 100vh;
            position: fixed;
            top: 0;
            overflow-y: auto;
            transition: 0.6s ease;
            transition-property: left;
            z-index: 950;
        }

        header {
            background: #33363a;
        }

        header img {
            width: 100px;
            margin: 15px;
            margin-left: 70px;
            border-radius: 50%;
            border: 3px solid #b4b8b9;
        }

        .close-btn {
            position: absolute;
            color: #fff;
            font-size: 23px;
            right: 0px;
            margin: 15px;
            cursor: pointer;
        }

        header h1 {
            text-align: center;
            font-weight: 500;
            font-size: 25px;
            padding-bottom: 13px;
            font-family: sans-serif;
            letter-spacing: 2px;
        }

        .menu {
            width: 100%;
            margin-top: 30px;
        }

        .menu .item {
            position: relative;
            cursor: pointer;
        }

        .menu .item a {
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            display: block;
            padding: 5px 30px;
            line-height: 60px;
        }

        .item i {
            margin-right: 15px;
        }

        .item a .dropdown {
            position: absolute;
            right: 0;
            margin: 20px;
            transition: 0.3s ease;
        }

        .item .sub-menu {
            background: #262627;
            display: none;
        }

        .menu-btn {
            position: absolute;
            color: rgb(0, 0, 0);
            font-size: 35px;
            cursor: pointer;
            margin: 25px;
        }

        .side-bar.active {
            left: 0;
        }

        .side-bar::-webkit-scrollbar {
            width: 0px;
        }

        .item .sub-menu a {
            padding-left: 80px;
        }

        .rotate {
            transform: rotate(90deg);
        }

        .logout {
            position: fixed;
            bottom: 0;
        }
    </style>
</head>

<body>
    <?php require_once('php/header.php'); ?>
    <div class="container">
        <div class="row text-center py-5">
            <?php
            $result = $database->getData();
            while ($row = mysqli_fetch_assoc($result)) {
                //component($row['title_of_the_book'],$row['price'],$row['images']);
                component($row['images'], $row['title_of_the_book'], $row['price'], $row['cart_id'], $row['author'], $row['stock_status']);
            }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>