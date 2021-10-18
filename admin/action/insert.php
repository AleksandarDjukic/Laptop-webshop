<?php
    if(isset($_POST['insertSubmit'])){
        if(isset($_POST['product_name']) && isset($_POST['product_price']) ){
            require '../inc/start.php';
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
            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg', 'jpeg', 'png');
            if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                    if($fileSize < 1000000){
                        $fileNameNew = uniqid('', true).".".$fileActualExt;
                        $fileDestination = "../uploads/".$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $finalName = "admin/uploads/".$fileNameNew;
                        $stmt = $conn->prepare("INSERT INTO product (product_name, product_price, brand, cpu_brand, cpu, cpu_cores, cpu_freq, ram, ram_speed, storage, gpu_type, gpu_name, gpu_memory, gpu_desc, screen_size, resolution, os, port, connection, quantity, color, product_desc, img) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                        $stmt->bind_param("sisssssisisssssssssisss",
                        $product_name, $product_price, $brand, $cpu_brand, $cpu, $cpu_cores, $cpu_freq, 
                        $ram, $ram_speed, $storage, $gpu_type, $gpu_name, $gpu_memory, $gpu_desc, 
                        $screen_size, $resolution, $os, $port, $connection, $quantity, $color, $product_desc, $finalName);
                        $stmt->execute();
                        $stmt->close();
                        header('Location: ../insert.php?add=true');
                    }
                    else{
                        header('Location: ../insert.php?FileTooBig');
                    }
                }
                else{
                    header('Location: ../insert.php?erorrUploadingImg');
                }
            }
            else{
                header('Location: ../insert.php?wrongImgtype');
            }
        }
        else{
            header('Location: ../insert.php?add=false');
        }
    }
?>