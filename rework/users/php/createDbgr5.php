<?php

class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

public function __construct(
    $dbname = "user_db",
    $tablename = "cart_itemgr5",
    $servername = "localhost",
    $username = "root",
    $password = ""
)
{
    $this->dbname = $dbname;
    $this->tablename = $tablename;
    $this->servername = $servername;
    $this-> username = $username;
    $this->password = $password;

    $this->con = mysqli_connect($servername, $username, $password);

    if(!$this->con){
        die("Connection failed:".mysqli_connect_error());
    }
    mysqli_select_db($this->con, $this->dbname) or die("Error selecting database: " . mysqli_error($this->con));
}
public function getData(){
    $sql = "SELECT * FROM $this->tablename";

    $result = mysqli_query($this->con, $sql);

    if(mysqli_num_rows($result)>0){
        return $result;
    }
}
public function getStockStatus($cart_id)
{
    $sql = "SELECT stock_status FROM cart_itemgr5 WHERE cart_id = $cart_id";

    $result = mysqli_query($this->con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['stock_status'];
    }

    return null;
}
}
?>