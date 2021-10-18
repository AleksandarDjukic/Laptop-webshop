<?php
if(isset($_POST['loginSubmit'])){
    require '../php/config.php';
    require '../php/functions.php';
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if(emptyInputSignIn($email,$pass)!==false){
        header("Location: ../login.php?error=emptyInput");
        exit();
    }
    loginUser($conn, $email, $pass);
}
else{
    header(Location: "../login.php");
}