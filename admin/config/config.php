<?php
const HOST="162.14.107.142";
const USER="root";
const PASSWD = "1937dzl.";
const DATABASE = "blog";
function connecttodb(){
    $db = mysqli_connect(HOST,USER,PASSWD,DATABASE);
    if(!$db){
        die("Connection failed: " . mysqli_connect_error());
    }
    return $db;
}

?>