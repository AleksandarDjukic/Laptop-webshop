<?php
require 'config.php';
function emptyInputSignUp($name, $lastname, $email, $phone, $password, $repeatPassword, $address){
    $result;
    if(empty($name) || empty($lastname) || empty($email) || empty($phone) || empty($password) || empty($repeatPassword) || empty($address)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
}
function passwordReq($password){
    $result;
    if(!preg_match('/^.{8,20}$/', $password)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function passwordRepeat($password, $passwordRepeat){
    $result;
    if($password !== $passwordRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function emailExists($conn, $email){
    $result;
    $sql = "SELECT * FROM users WHERE email = '".$email."';";
    $select = $conn->query($sql);
    if($select->fetch_assoc()){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function createUser($conn, $email, $pass, $name, $lastname, $phone, $address){
    $result;
    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (email, password, name, lastname, phone, address) VALUES ( ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $email, $hashedPass, $name, $lastname, $phone, $address);
    if($stmt->execute()){
        $result = true;
    }
    else{
        $result = false;
    }
    $stmt->close();
    return $result;
}
function emptyInputSignIn($email,$password){
    $result;
    if(empty($email) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function loginUser($conn, $email, $pass){
    $emailExists = emailExists($conn, $email);
    if($emailExists === false){
        header("Location: ../login.php?error=invalidEmail");
    }
    $sql = "SELECT * FROM users WHERE email = '".$email."';";
    $select = $conn->query($sql);
    $row = $select->fetch_assoc();
    $passHashed = $row['password'];
    $checkPw = password_verify($pass, $passHashed);  
    if($checkPw === false){
        header("Location: ../login.php?error=invalidPassword");
        exit();
    }
    else if($checkPw === true){
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['phone'] = $row['phone'];
        header("Location: ../index.php?login=true");
    }
}
function checkLogin(){
    $result;
    if($_SESSION['id']){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function checkAdminLogin(){
    $result;
    if($_SESSION['id']){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function selectPrice($conn, $productId){
    $sql_price = "SELECT product_price FROM product WHERE id = ".$productId;
    $price = $conn->query($sql_price);
    $productPrice = $price->fetch_assoc();
    return $productPrice['product_price'];
}
function quantityUpdate($conn, $productId){
    $stmt = $conn->prepare("UPDATE product SET quantity = quantity - 1, no_purchases = no_purchases + 1 WHERE id = ?");
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $stmt->close();
}
function totalPurchasePrice($conn){
    $sql = "SELECT SUM(purchase_price) AS purchase_price FROM purchase;";
    $result = $conn->query($sql);
    $totalPrice = $result->fetch_assoc();
    return $totalPrice['purchase_price'];
}
function lastDayPurchase($conn){
    $sql = "SELECT SUM(purchase_price) AS purchase_price FROM purchase WHERE purchase_date > now() - interval 24 hour;";
    $result = $conn->query($sql);
    $totalPrice = $result->fetch_assoc();
    return $totalPrice['purchase_price'];
}
function formatDateToString($date, $format){
    $date = date_format($date, $format);
    $date = strval($date);
    echo $date;
}