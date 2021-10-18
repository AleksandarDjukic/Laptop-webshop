<?php
    if(isset($_POST['submitCart'])){
        $product_id = $_POST['product_id'];
        if(isset($_POST['user_id'])){
            $user_id = $_POST['user_id'];
            require '../php/config.php';
            $stmt = $conn->prepare("INSERT INTO cart (product_id, user_id) VALUES (?, ?);");
            $stmt->bind_param("ii",$product_id, $user_id);
            $stmt->execute();
            $stmt->close();
            header("Location:../product.php?id=".$product_id."&add=true");
        }
        else{
            header("Location:../product.php?id=".$product_id."&add=notLoggedIn");
        }
    }
    else{
        echo "<h1>ERROR</h1>";
    }
?>
