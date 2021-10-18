<?php 
    if(isset($_POST['buySubmit'])){
        require '../php/config.php';
        $productId = $_POST['product_id'];
        $userId = $_POST['user_id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        if(empty($name) || empty($lastname) || empty($address) || empty($phone)){
            header("location: ../product.php?id=".$productId."&error=EmptyFields");
        }
        else{
            $stmt = $conn->prepare("INSERT INTO purchase (product_id, user_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $productId, $userId);
            if($stmt->execute()){
                $stmt->close();
                $stmt = $conn->prepare("UPDATE product SET quantity = quantity - 1, no_purchases = no_purchases + 1 WHERE id = ?");
                $stmt->bind_param("i", $productId);
                $stmt->execute();
                $stmt->close();
                header("location: ../product.php?id=".$productId."&purchese=succes");
            }
            else{
                $stmt->close();
                header("location: ../product.php?id=".$productId."&purchese=fail");
            }
        }  
    }
    else if(isset($_POST['buySubmitNR'])){
        require '../php/config.php';
        $productId = $_POST['product_id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        if(empty($name) || empty($lastname) || empty($address) || empty($phone)){
            header("location: ../product.php?id=".$productId."&error=EmptyFields");
        }
        else{
            $stmt = $conn->prepare("INSERT INTO notregistered (product_id, name, lastname, phone, address) VALUES (?,?,?,?,?);");
            var_dump($stmt);
            $stmt->bind_param("sssss", $productId, $name, $lastname, $address, $phone);
            if($stmt->execute()){
                $stmt->close();
                $stmt = $conn->prepare("UPDATE product SET quantity = quantity - 1, no_purchases = no_purchases + 1 WHERE id = ?");
                $stmt->bind_param("i", $productId);
                $stmt->execute();
                $stmt->close();
                header("location: ../product.php?id=".$productId."&purchese=success");
            }
            else{
                $stmt->close();
                $url = "location: ../product.php?id=".$productId."&purchese=fail";
                header($url);
            }
        } 
    }
    else{
        echo "error";
    }
?>