<?php
const HOST="";
const USER="";
const PASSWD = "";
const DATABASE = "";
function connecttodb(){
    $db = mysqli_connect(HOST,USER,PASSWD,DATABASE);
    if(!$db){
        die("Connection failed: " . mysqli_connect_error());
    }
    return $db;
}

?>
