<?php
include ('config.php');
session_start();
$message="";
$mess="";
if(isset($_POST['log'])){
    if($_POST['email']!="" && $_POST['password']!=""){
        $username= $_POST['email'];
        $password = $_POST['password'];
        $verify = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' && password='$password'");
        $count = mysqli_num_rows($verify);
        if($count==1){
            $email=$_SESSION['email'];
            $password=$_SESSION['password'];
            header('Location:dash.php');
        }else{
            $message = 'Email and password not valid';
        }
    }else{
        $mess='please fill all areas';
    }
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
    </script>
</head>
<body>
    
    <form action>
        <p>
            Dating is life
        </p>
        <input name="email" type="email" placeholder="email:">
        <br><br>
        <input name="password" type="password" placeholder="password:">
        <br><br>
        <button name="log">LOG IN</button>
        <div style="color:red">
            <?php
                echo $mess;
                echo $message;
            ?>
        </div>
        
    </form>
</body>
</html>