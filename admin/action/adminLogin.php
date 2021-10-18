<?php
    if(isset($_POST['adminSubmit'])){
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        if($uname == "Aleksandar" && $pass == "Djukic"){
            session_start();
            $_SESSION['id'] = true;
            header("Location: ../home.php?login=true");
        }
        else{
            header("Location: ../index.php?error=invalid");
        }
    }
    else{
        echo "ERROR!";
    }