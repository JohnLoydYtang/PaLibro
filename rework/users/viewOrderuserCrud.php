<?php

require("config.php");

if(isset($_GET['rem']) && $_GET['rem']>0)
{
    $query="SELECT * FROM checkout_item WHERE Reference_No='$_GET[rem]'";
    $result=mysqli_query($con,$query);
    $fetch=mysqli_fetch_assoc($result);

    // image_remove($fetch['images']);

    $query="DELETE FROM `checkout_item` WHERE `Reference_No`='$_GET[rem]'";
    if(mysqli_query($con,$query)){
        header("location: viewOrderuser.php?success=removed");
    } else {
        header("location: viewOrderuser.php?alert=remove_failed");
    }
}

if(isset($_GET['rem']) && $_GET['rem']>0)
{
    $query="SELECT * FROM checkout_itemhs WHERE Reference_No='$_GET[rem]'";
    $result=mysqli_query($con,$query);
    $fetch=mysqli_fetch_assoc($result);

    // image_remove($fetch['images']);

    $query="DELETE FROM `checkout_itemhs` WHERE `Reference_No`='$_GET[rem]'";
    if(mysqli_query($con,$query)){
        header("location: viewOrderuser.php?success=removed");
    } else {
        header("location: viewOrderuser.php?alert=remove_failed");
    }
}