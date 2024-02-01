<?php

require("config.php");

function image_upload($img)
{
    $tmp_loc = $img['tmp_name'];
    $new_name = random_int(11111,99999).$img['name'];

    $new_loc = UPLOAD_SRC.$new_name;

    if(!move_uploaded_file($tmp_loc,$new_loc)){
        header("location: viewProductGr2.php?alert=img_upload");
        exit;
    }else{
       return $new_name;
    }
}

function image_remove($img)
{
    if(!unlink(UPLOAD_SRC.$img)){
        header("location: viewProductGr2.php?alert=img_rem_fail");
        exit;
    }
}
if(isset($_POST['addproduct']))
{
 
    foreach($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($con, $value);
    }
    $imgpath = image_upload($_FILES['image']);

    $query="INSERT INTO cart_itemgr2(title_of_the_book, date_of_published, author, price, grade_level, images) 
    VALUES ('$_POST[title_of_the_book]','$_POST[date_of_published]','$_POST[author]','$_POST[price]','$_POST[grade_level]','$imgpath')";

    if(mysqli_query($con, $query)){
        header("location: viewProductGr2.php?success=added");
    } else {
        header("location: viewProductGr2.php?alert=add_failed");
    }
}

if(isset($_GET['rem']) && $_GET['rem']>0)
{
    $query="SELECT * FROM cart_itemgr2 WHERE cart_id='$_GET[rem]'";
    $result=mysqli_query($con,$query);
    $fetch=mysqli_fetch_assoc($result);

    image_remove($fetch['images']);

    $query="DELETE FROM `cart_itemgr2` WHERE `cart_id`='$_GET[rem]'";
    if(mysqli_query($con,$query)){
        header("location: viewProductGr2.php?success=removed");
    } else {
        header("location: viewProductGr2.php?alert=remove_failed");
    }
}

if(isset($_POST['editproduct']))
{
    foreach($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($con, $value);
    }
    if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name']))
    {
        $query="SELECT * FROM cart_itemgr2 WHERE cart_id='$_POST[editpid]'";
        $result=mysqli_query($con,$query);
        $fetch=mysqli_fetch_assoc($result);

        $imgpath=image_upload($_FILES['image']);

        $update="UPDATE `cart_itemgr2` SET `title_of_the_book`='$_POST[title_of_the_book]',`grade_level`='$_POST[grade_level]',`date_of_published`='$_POST[date_of_published]',
        `author`='$_POST[author]',`price`='$_POST[price]',`images`='$imgpath', `stock_status`='$_POST[stock_status]' WHERE cart_id='$_POST[editpid]'"; 
    } else {
        $update="UPDATE `cart_itemgr2` SET `title_of_the_book`='$_POST[title_of_the_book]',`grade_level`='$_POST[grade_level]',`date_of_published`='$_POST[date_of_published]',
        `author`='$_POST[author]',`price`='$_POST[price]', `stock_status`='$_POST[stock_status]' WHERE cart_id='$_POST[editpid]'";
    }
    if(mysqli_query($con,$update)){
        header("location: viewProductGr2.php?success=updated");
    } else {
        header("location: viewProductGr2.php?alert=update_failed");
    }
}   
?>