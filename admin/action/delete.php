<?php
require '../inc/start.php';
if(isset($_POST['deleteSubmit'])){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $stmt = $conn->prepare("DELETE FROM product WHERE id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
        header('Location: ../delete.php?delete=true');
    }
    else{
        header('Location: ../delete.php?delete=false');
    }
} 
?>