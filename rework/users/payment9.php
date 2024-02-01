<?php
require_once('php/createDbPay2.php');
require_once('php/componentg9.php');

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

$db = new CreateDb(dbname: "user_db", tablename: "checkout_itemhs");

if (isset($_POST['buy'])) {
    $user_name = $_SESSION['user_name'];
    $total = $_SESSION['total'] ?? 0;
    $cart_items = $_SESSION['cart'];
    $date_of_purchase = date("Y-m-d");

    $reference_no = uniqid("REF-");

    $success = true;

    foreach ($cart_items as $item) {
        $cartid_hs = $item["cartid_hs"];
        $price = $item["price"] ?? 0;

        // Get the title_of_the_bookHS and highschool_level from the cart_item table using the cartid_hs
        $title_query = "SELECT title_of_the_bookHS, highschool_level FROM cart_itemhs9 WHERE cartid_hs = '$cartid_hs'";
        $title_result = $db->con->query($title_query);

        if ($title_result && $title_result->num_rows > 0) {
            $title_row = $title_result->fetch_assoc();
            $title_of_the_bookHS = $title_row["title_of_the_bookHS"];
            $highschool_level = $title_row["highschool_level"];

            $query = "INSERT INTO checkout_itemhs (Reference_No, fullname, cartid_hs, title_of_the_bookHS, highschool_level, dates_of_purchase, total, order_status)
                        VALUES ('$reference_no', '$user_name', '$cartid_hs', '$title_of_the_bookHS', '$highschool_level', '$date_of_purchase', $total, 'Pending')";

            if (!$db->con->query($query)) {
                $success = false;
                break;
            }
        } else {
            $success = false;
            break;
        }
    }

    if ($success) {
        echo "<script>alert('Payment Successful!')</script>";
        unset($_SESSION['cart']);
        echo "<script>window.location='viewOrderuser.php'</script>";
    } else {
        echo "<script>alert('Error processing payment')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/sidebarw/carstyle.css">
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center; /* center vertically */
            align-items: center; /* center horizontally */
            height: 100vh;
            background: url('https://wallpaperaccess.com/full/2114456.jpg');
        }

        h1 {
            text-align: center;
            font-weight: 500;
            font-size: 25px;
            padding-bottom: 13px;
            font-family: sans-serif;
            letter-spacing: 2px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            gap: 10px;
        }
    </style>
</head>
<body>
</body>
</html>

