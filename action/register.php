<?php
if(isset($_POST['registerSubmit'])){
    require '../php/config.php';
    require '../php/functions.php';
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $passRpt = $_POST['passwordRepeat'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    if(emptyInputSignUp($name, $lastname, $email, $phone, $pass, $passRpt, $address)!==false){
        header("Location: ../register.php?error=emptyInput");
        exit();
    }
    if(passwordReq($pass)!==false){
        header("Location: ../register.php?error=invalidPass");
        exit();
    }
    if(passwordRepeat($pass, $passRpt)!==false){
        header("Location: ../register.php?error=passRpt");
        exit();
    }
    if(emailExists($conn, $email) !== false){
        header("Location: ../register.php?error=invalidEmail");
        exit();
    }
    if(createUser($conn, $email, $pass, $name, $lastname, $phone, $address)!==true){
        echo "nije dobro nesto";
    }
    else{
        header("Location: ../login.php?registeredSuccessfully=true");
    }
}
else{
    echo "ERROR !";
}
?>