<?php
include('config.php');

if(isset($_POST['log'])){
    $check = mysqli_query($conn, "SELECT * users WHERE email='{$email}'");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action>
        <p>
            Dating is life
        </p>
        <input type="email" placeholder="email:">
        <br><br>
        <input type="password" placeholder="password:">
        <br><br>
        <button name="log">LOG IN</button>
        
    </form>
</body>
</html>