<?php
$conn = mysqli_connect("localhost", "root", "", "register_db");
if($conn===false){
    die("error".mysqli_connect_error());
}
?>