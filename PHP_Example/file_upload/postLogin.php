<?php
require_once('config/db.php');

if(isset($_POST['username']) && $_POST['username']!= ''){
    $password = crypt($password, KEY_SALT);
    $sql = "select * from users where username = '$username' and password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        session_start();
        $_SESSION['username'] = $username;
        header('Location: index.php');
    }else{
        echo "Wrong username or password";
    }
}else{
    header('Location: login.php');
}