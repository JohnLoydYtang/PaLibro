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
    $tablename = "checkout_item",
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
public function getFullName($id)
{
    $query = "SELECT fullname FROM user_form WHERE id = '$id'";
    $result = $this->con->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["fullname"];
    }

    return null;
}
}
?>