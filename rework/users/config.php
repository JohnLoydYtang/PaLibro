<?php
$conn = mysqli_connect('localhost','root','','user_db');
?>
<?php

$con = mysqli_connect('localhost','root','','user_db');

if(mysqli_connect_errno()){
    die("Cannot Connect to Database".mysqli_connect_error());
}
define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/PaLibro/rework/users/images/");

define("FETCH_SRC","http://127.0.0.1/PaLibro/rework/users/images/")
?>