<?php
require '../inc/start.php';
    if(isset($_POST['updateSubmit'])){
        if(isset($_POST['product_name'])){
            $id = $_POST['id'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $brand = $_POST['brand'];
            $cpu_brand = $_POST['cpu_brand'];
            $cpu = $_POST['cpu'];
            $cpu_cores = $_POST['cpu_cores'];
            $cpu_freq = $_POST['cpu_freq'];
            $ram = $_POST['ram'];
            $ram_speed = $_POST['ram_speed'];
            $storage = $_POST['storage'];
            $gpu_type = $_POST['gpu_type'];
            $gpu_name = $_POST['gpu_name'];
            $gpu_memory = $_POST['gpu_memory'];
            $gpu_desc = $_POST['gpu_desc'];
            $screen_size = $_POST['screen_size'];
            $resolution = $_POST['resolution'];
            $os = $_POST['os'];
            $port = $_POST['port'];
            $connection = $_POST['connection'];
            $quantity = $_POST['quantity'];
            $color = $_POST['color'];
            $product_desc = $_POST['product_desc'];           
            $stmt = $conn->prepare("UPDATE product SET product_name = ?, product_price = ?, brand = ?, cpu_brand = ?, cpu = ?, cpu_cores = ?, cpu_freq = ?, ram = ?, ram_speed = ?, storage = ?, gpu_type = ?, gpu_name = ?, Gpu_memory = ?, gpu_desc = ?, screen_size = ?, resolution = ?, os = ?, port = ?, connection = ?, quantity = ?, color = ?, product_desc = ? WHERE id = ?");
            $stmt->bind_param("sisssssisisssssssssissi",
            $product_name, $product_price, $brand, $cpu_brand, $cpu, $cpu_cores, $cpu_freq, $ram, $ram_speed, $storage, $gpu_type, $gpu_name, $gpu_memory, $gpu_desc, $screen_size, $resolution, $os, $port, $connection, $quantity, $color, $product_desc, $id);
            $stmt->execute();
            $stmt->close();
            header('Location: ../update.php?update=true');
        }
        else{
            header('Location: ../update.php?update=false'); 
        }
    }
?>