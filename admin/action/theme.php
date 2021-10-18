<?php
require '../inc/start.php';
echo "ovo je dobro ";
    if(isset($_POST['updateColor'])){
        echo "dugme je ok ";
        if(isset($_POST['body-bg'])){
            echo "ok je";
            $body = $_POST['body-bg'];
            $primary = $_POST['primary-color'];
            $secondary = $_POST['secondary-color'];
            $text = $_POST['text-color'];             
            $stmt = $conn->prepare("UPDATE theme SET body = ?, primary_color = ?, secondary_color = ?, text_color = ? WHERE id = 1");
            $stmt->bind_param("ssss",
            $body, $primary, $secondary, $text);
            $stmt->execute();
            $stmt->close();
            header('Location: ../settings.php?theme=true');
        }
        else{
            header('Location: ../settings.php?theme=false');
        }
    }
?>