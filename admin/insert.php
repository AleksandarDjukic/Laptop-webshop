<?php
    session_start();
    require '../php/config.php';
    require '../php/functions.php';
    if(isset($_SESSION['id'])){
	    require 'inc/head.php';
?>	
<body>
<?php 
    if(isset($_GET['add'])){
        if($_GET['add'] == "true"){?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'You add a new product successfully!',
                });
            </script>
            <?php
        }
        if($_GET['add'] == "false"){?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error !',
                    text: 'You failed to add the product!',
                });
            </script>
            <?php
        }
    }
        require 'inc/nav.php';
    ?>
    <form method="POST" action="action/insert.php" enctype="multipart/form-data">
       <div class="container">
       <div class="form-group">
                <h2>Add new product</h2>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Product name</label>
                            <input autocomplete="off" type="text" class="form-control" name="product_name" id="">
                        </div>
                    </div>
                   <div class="col-sm-4">
                        <div class="form-group">
                            <label>Product price</label>
                            <input autocomplete="off" type="text" class="form-control" name="product_price" id="">
                        </div>
                   </div>
               </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label>Brand</label>
                        <input autocomplete="off" type="text" class="form-control" name="brand" id="">
                    </div>
                    <div class="form-group">
                        <label>CPU Brand</label>
                        <input autocomplete="off" type="text" class="form-control" name="cpu_brand" id="">
                    </div>
                    <div class="form-group">
                        <label>Processor</label>
                        <input autocomplete="off" type="text" class="form-control" name="cpu" id="">
                    </div>
                    <div class="form-group">
                        <label>Processor cores</label>
                        <input autocomplete="off" type="text" class="form-control" name="cpu_cores" id="">
                    </div>
                    <div class="form-group">
                        <label>Processor frequency</label>
                        <input autocomplete="off" type="text" class="form-control" name="cpu_freq" id="">
                    </div>
                    <div class="form-group">
                        <label>RAM</label>
                        <input autocomplete="off" type="text" class="form-control" name="ram" id="">
                    </div>
                    <div class="form-group">
                        <label>RAM Frequency</label>
                        <input autocomplete="off" type="text" class="form-control" name="ram_speed" id="">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label>Storage</label>
                        <input autocomplete="off" type="text" class="form-control" name="storage" id="">
                    </div>
                    <div class="form-group">
                        <label>Graphics card type</label>
                        <input autocomplete="off" type="text" class="form-control" name="gpu_type" id="">
                    </div>
                    <div class="form-group">
                        <label>Graphics card</label>
                        <input autocomplete="off" type="text" class="form-control" name="gpu_name" id="">
                    </div>
                    <div class="form-group">
                        <label>Graphics card memory</label>
                        <input autocomplete="off" type="text" class="form-control" name="gpu_memory" id="">
                    </div>
                    <div class="form-group">
                        <label>Graphics card description</label>
                        <textarea class="form-control opis" name="gpu_desc" id=""></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                            <label>Screen size</label>
                                <input autocomplete="off" type="text" class="form-control" name="screen_size" id="">
                            </div>
                            <div class="col">
                            <label>Screen resolution</label>
                                <input autocomplete="off" type="text" class="form-control" name="resolution" id="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                <div class="form-group">
                        <label>Operating system</label>
                        <input autocomplete="off" type="text" class="form-control" name="os" id="">
                    </div>
                    <div class="form-group">
                        <label>Ports</label>
                        <input autocomplete="off" type="text" class="form-control" name="port" id="">
                    </div>
                    <div class="form-group">
                        <label>Connection</label>
                        <input autocomplete="off" type="text" class="form-control" name="connection" id="">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input autocomplete="off" type="text" class="form-control" name="quantity" id="">
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <input autocomplete="off" type="text" class="form-control" name="color" id="">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control opis" name="product_desc" id=""></textarea>
                    </div>
                </div>
            </div>
            <div class="row">               
                <div class="col-sm">     
                    <label>Product image 1</label><br>
                    <input type="file" name="file" id="">
                </div>
            </div>
            <input type="submit" name="insertSubmit">
        </div>
    </form>
    <script src="js/nav.js"></script>
</body>
<?php
}
else{
    echo "Access denied";
}
?>

       


    