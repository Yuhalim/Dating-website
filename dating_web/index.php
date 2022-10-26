<?php
include('config.php');
$comment="";

if(isset($_POST['submit'])){

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$_POST['email']}'");
    if($_POST['firstname']=="" || $_POST['lastname']=="" || $_POST['age']=="" || $_POST['height']=="" || $_POST['email']=="" || $_POST['number']=="" || $_POST['password']=="" || $_POST['confirm']=="" || $_POST['profile']==""){
        $comment= "all fields must be filled";
    }
    elseif(mysqli_num_rows($check) > 0){
        $comment = "sorry email is already taken";
    }
    elseif($_POST['password']!=$_POST['confirm']){
        $comment = "reconfirm your password";
    }
    elseif(strlen($_POST['number']) < 12){
        $comment = "your number is too short";
    }
    else{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $profile = $_POST['profile'];
    $insert = mysqli_query($conn, "INSERT INTO users(fname, lname, age, gender, height, email, number, password, profile) VALUES('$firstname', '$lastname', '$age', '$gender', '$height', '$email', '$number', '$password', '$profile')");
    if($insert){
        $comment = "submitted";
    }
    }
    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KDU HOOKUP</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="login.php">
        <input type="text" name="firstname" placeholder="enter your first name">
        <br><br>
        <input type="text" name="lastname" placeholder="enter your last name">
        <br><br>
        <input type="number" name="age" placeholder="enter your age">
        <br><br>
        <p>CHOOSE YOUR GENDER</p>
        <div class="gen">
            MALE:        <input type="radio" name="gender" id="male">
            <br>
            FEMALE:<input type="radio" name="gender" id="female">
        </div>
        <br><br>
        <input type="text" name="height" placeholder="enter your height">
        <br><br>
        <input type="text" name="email" placeholder="enter your email">
        <br><br>
        <input type="number" name="number" placeholder="enter your number">
        <br><br>
        <input type="password" name="password" placeholder="enter your password">
        <br><br>
        <input type="password" name="confirm" placeholder="confirm your password">
        <br><br>
        <input type="file" name="profile">
        <input class="psub" type="submit" name="profilesub" value="uplaod">
        <br>
        <button name="submit">SUBMIT</button>
        <div style="color:black; font-weight:bold">
            <?php
                echo $comment;
            ?>
    </div>
    </form>

</body>
</html>