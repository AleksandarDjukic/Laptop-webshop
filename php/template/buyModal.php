<div class="buy-modal-body animate__animated ">
    <form method="POST" action="action/buy.php">
        <?php 
            if(isset($_SESSION['id'])){?>
                <input type="hidden" name="user_id" value="<?=$_SESSION['id'];?>">
                <input type="hidden" name="product_id" value="<?=$row['id'];?>">
                <p>Name</p>
                <input type="text" name="name" value="<?=$_SESSION['name'];?>">
                <p>Lastname</p>
                <input type="text" name="lastname" value="<?=$_SESSION['lastname'];?>">
                <p>Address</p>
                <input type="text" name="address" value="<?=$_SESSION['address'];?>">
                <p>Phone</p>
                <input type="text" name="phone" value="<?=$_SESSION['phone'];?>">
                <h6><?=$row['product_name'];?></h6>
                <h6><?=$row['product_price'];?>$</h6>
                <input type="submit" name="buySubmit" class="buySubmit" value="Confirm">
                <input type="button" name="buyCancel" class="buyCancel" value="Cancel">
        <?php
            }
            else{?>
                <input type="hidden" name="product_id" value="<?=$row['id'];?>">
                <p>Name</p>
                <input type="text" name="name">
                <p>Lastname</p>
                <input type="text" name="lastname">
                <p>Address</p>
                <input type="text" name="address">
                <p>Phone</p>
                <input type="text" name="phone">
                <h6><?=$row['product_name'];?></h6>
                <h6><?=$row['product_price'];?>$</h6>
                <input type="submit" name="buySubmitNR" class="buySubmit" value="Confirm">
                <input type="button" name="buyCancel" class="buyCancel" value="Cancel">
        <?php
            }
        ?>
    </form>
</div>