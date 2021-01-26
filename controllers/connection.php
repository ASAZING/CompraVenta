<?php 

$conn = new mysqli("localhost", "root", "", "sendinfophp");


function connect(){
    if ($conn->connect_errno) {
        return false;
    }else {
        return true;
    }
}

?>