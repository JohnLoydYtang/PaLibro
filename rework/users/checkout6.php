<?php
session_start();

require_once('php/createDbgr6.php');
require_once('php/componentg6.php');

$db = new CreateDb(dbname: "user_db", tablename: "cart_itemgr6");

if (isset($_POST['remove'])) {
	//print_r($_GET['cart_id']);
	if ($_GET['action'] == 'remove') {
		foreach ($_SESSION['cart'] as $key => $value) {
			if ($value["cart_id"] == $_GET['cart_id']) {
				unset($_SESSION['cart'][$key]);
				echo "<script>alert('Product has been Removed.')</script>";
				echo "<script>window.location='checkout6.php'</script>";
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cart</title>
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
	</style>
</head>

<body class="bg-light">
	<?php
	require_once('php/headergr6.php');
	?>
	<div class="container-fluid">
		<div class="row px-5">
			<div class="col-md-7" style="background-color:white;">
				<div class="shopping-cart">
					<h6>My Cart</h6>
					<hr>
					<?php

					$total = 0;

					if (isset($_SESSION['cart'])) {
						$product_id = array_column($_SESSION['cart'], "cart_id");

						$result = $db->getData();
						while ($row = mysqli_fetch_assoc($result)) {
							foreach ($product_id as $cart_id) {
								if ($row['cart_id'] == $cart_id) {
									cartElement($row['images'], $row['title_of_the_book'], $row['price'], $row['cart_id'], $row['author'], $row['stock_status']);
									$total = $total + (int)$row['price'];
								}
							}
						}
						$_SESSION['total'] = $total; // Store the total price in the session

					} else {
						echo "<h5>Cart is empty</h5>";
					}
					?>
				</div>
			</div>
			<div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25" style="background-color:white;">

				<div class="pt-4">
					<h6>PRICE DETAILS</h6>
					<hr>
					<div class="row price-details">
						<div class="col-md-6">
							<?php
							if (isset($_SESSION['cart'])) {
								$count = count($_SESSION['cart']);
								echo "<h6>Price($count items)</h6>";
							} else {
								echo "<h6>Price(0 items)</h6>";
							}
							?>
							<div class="col-md-6"></div>
							<hr>
							<h6>Amount Payable</h6>
						</div>
						<div class="col-md-6">
							<h6>₱<?php echo $total; ?></h6>
							<hr>
							<h6>₱<?php echo $total;
									?></h6>
						</div>
						<form action="payment6.php" method="post">
							<button type="submit" class="btn btn-primary col-md-12 border rounded" name="buy">Buy</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>