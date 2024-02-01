<?php

function component( $productimg, $productname, $productprice, $productid, $productseller, $productstock){
    $element ="
    <div class='col-md-3 col-sm-6 my-3 my-md-0'>
    <form action='cart8.php' method='post'>
        <div class='card shadow'> 
            <div>
                <img src='images/$productimg' alt='' class='img-fluid card-img-top' style='width:100%; height: 15vw;'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>$productname</h5>
                <h6>
                </h6>
                <p class='cart-text'>
                $productseller <br><br>
                <b>$productstock</b>
                                </p>
                <h5>
                    <span class='prices'>₱$productprice</span>
                </h5>
                <button type='submit' class='btn btn-warning my-3' name='add'>Add to Cart<i class='fas fa-shopping-cart'></i></button>
                <input type='hidden' name='cartid_hs' value='$productid'>
                </div>
        </div>
    </form>
    </div>
    ";
    echo $element;
}
function cartElement($productimg, $productname, $productprice, $productid, $productseller, $productstock){
    $element ="
    <form action='checkout8.php?action=remove&cartid_hs=$productid' method='post' class='cart-items'>
    <div class='border-rounded'>
        <div class='row bg-white'>
            <div class='col-md-3 pl-0'>
            <img src='images/$productimg' alt='' class='img-fluid'>            
            </div>
                <div class='col-md-6'>
                    <h5 class='pt-2'>$productname</h5>
                    <small class='text-secondary'>$productseller</small>
                    <small class='text-secondary'>$productstock</small>
                    <h5 class='pt-2'>₱$productprice</h5>
                    <button type='submit' class='btn btn-danger mx-2' name='remove'>Remove</button>
                </div>
        </div>
    </div>
</form>
";
echo $element;
}