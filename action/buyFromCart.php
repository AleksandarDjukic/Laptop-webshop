<?php 
    if(isset($_POST['buySubmit'])){
        require '../php/config.php';
        require '../php/functions.php';
        $userId = $_POST['user_id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $total = 0;
        $total = intval($total);
        if(empty($name) || empty($lastname) || empty($address) || empty($phone)){
            header("location: ../cart.php?error=EmptyFields");
        }
        else{
            $sql = "SELECT * FROM cart WHERE user_id = ". $userId;
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
            $price = selectPrice($conn, $row['product_id']);
            $price = intval($price);
            $stmt = $conn->prepare("INSERT INTO purchase (product_id, user_id, purchase_price) VALUES (?, ?, ?)");
                $stmt->bind_param("iii", $row['product_id'], $userId, $price);
                if($stmt->execute()){
                    $stmt->close();
                    $deleteFromCart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ? AND product_id = ?");
                    $deleteFromCart->bind_param("ii", $userId, $row['product_id']);
                    $deleteFromCart->execute();
                    $deleteFromCart->close();
                    quantityUpdate($conn, $row['product_id']);
                    header("location: ../cart.php?purchase=success");
                }
                else{
                    echo "ERROR!";
                }
            }
        }  
    }
    else{
        echo "error";
    }
?>