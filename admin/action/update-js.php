<?php 
require '../inc/start.php';
if (isset($_POST['action'])) {
    if (isset($_POST['id'])){
        $id = $_POST['id'];
        $sql = "SELECT * FROM product WHERE id = ".$id;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc(); ?>
            <div class="container">
                <input type="hidden" value="<?=$row['id'];?>" name="id">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Product name</label>
                            <input value="<?=$row['product_name'];?>" autocomplete="off" type="text" class="form-control" name="product_name" id="">
                        </div>
                    </div>
                   <div class="col-sm-4">
                        <div class="form-group">
                            <label>Product price</label>
                            <input value="<?=$row['product_price'];?>" autocomplete="off" type="text" class="form-control" name="product_price" id="">
                        </div>
                   </div>
               </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Brand</label>
                            <input value="<?=$row['brand'];?>" autocomplete="off" type="text" class="form-control" name="brand" id="">
                        </div>
                        <div class="form-group">
                            <label>CPU Brand</label>
                            <input value="<?=$row['cpu_brand'];?>" autocomplete="off" type="text" class="form-control" name="cpu_brand" id="">
                        </div>
                        <div class="form-group">
                            <label>Processor</label>
                            <input value="<?=$row['cpu'];?>" autocomplete="off" type="text" class="form-control" name="cpu" id="">
                        </div>
                        <div class="form-group">
                            <label>Processor cores</label>
                            <input value="<?=$row['cpu_cores'];?>" autocomplete="off" type="text" class="form-control" name="cpu_cores" id="">
                        </div>
                        <div class="form-group">
                            <label>Processor frequency</label>
                            <input value="<?=$row['cpu_freq'];?>" autocomplete="off" type="text" class="form-control" name="cpu_freq" id="">
                        </div>
                        <div class="form-group">
                            <label>RAM</label>
                            <input value="<?=$row['ram'];?>" autocomplete="off" type="text" class="form-control" name="ram" id="">
                        </div>
                        <div class="form-group">
                            <label>RAM Frequency</label>
                            <input value="<?=$row['ram_speed'];?>" autocomplete="off" type="text" class="form-control" name="ram_speed" id="">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Storage</label>
                            <input value="<?=$row['storage'];?>" autocomplete="off" type="text" class="form-control" name="storage" id="">
                        </div>
                        <div class="form-group">
                            <label>Graphics card type</label>
                            <input value="<?=$row['gpu_type'];?>" autocomplete="off" type="text" class="form-control" name="gpu_type" id="">
                        </div>
                        <div class="form-group">
                            <label>Graphics card</label>
                            <input value="<?=$row['gpu_name'];?>" autocomplete="off" type="text" class="form-control" name="gpu_name" id="">
                        </div>
                        <div class="form-group">
                            <label>Graphics card memory</label>
                            <input value="<?=$row['gpu_memory'];?>" autocomplete="off" type="text" class="form-control" name="gpu_memory" id="">
                        </div>
                        <div class="form-group">
                            <label>Graphics card description</label>
                            <textarea  class="form-control opis" name="gpu_desc" id=""><?=$row['gpu_desc'];?></textarea>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                <label>Screen size</label>
                                    <input value="<?=$row['screen_size'];?>" autocomplete="off" type="text" class="form-control" name="screen_size" id="">
                                </div>
                                <div class="col">
                                <label>Screen resolution</label>
                                    <input value="<?=$row['resolution'];?>" autocomplete="off" type="text" class="form-control" name="resolution" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                    <div class="form-group">
                            <label>Operating system</label>
                            <input value="<?=$row['os'];?>" autocomplete="off" type="text" class="form-control" name="os" id="">
                        </div>
                        <div class="form-group">
                            <label>Ports</label>
                            <input value="<?=$row['port'];?>" autocomplete="off" type="text" class="form-control" name="port" id="">
                        </div>
                        <div class="form-group">
                            <label>Connection</label>
                            <input value="<?=$row['connection'];?>" autocomplete="off" type="text" class="form-control" name="connection" id="">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input value="<?=$row['quantity'];?>" autocomplete="off" type="text" class="form-control" name="quantity" id="">
                        </div>
                        <div class="form-group">
                            <label>Color</label>
                            <input value="<?=$row['color'];?>" autocomplete="off" type="text" class="form-control" name="color" id="">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control opis" name="product_desc" id=""><?=$row['product_desc'];?></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" name="updateSubmit">
            </div>
<?php
    }
}
?>
