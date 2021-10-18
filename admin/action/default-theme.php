<?php 
    if(isset($_POST['default'])){
        require '../inc/start.php';
        $body = "#b0b4cc";
        $primary = "#556c9e";
        $secondary = "#2b4275";
        $text = "#556c9e";
        $stmt = $conn->prepare("UPDATE theme SET body = ?, primary_color = ?, secondary_color = ?, text_color = ? WHERE id = 1");                    
        $stmt->bind_param("ssss",
        $body, $primary, $secondary, $text);
        $stmt->execute();
        $stmt->close();
        header('Location: ../settings.php?default=true');   
    }
    else{
        header('Location: ../settings.php?theme=false');  
    }
?>