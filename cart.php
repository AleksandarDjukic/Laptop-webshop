<?php
    session_start();
    if(isset($_SESSION['id'])){
        require './php/config.php';
        require './php/template/head.php';
        $sql="SELECT * FROM theme WHERE id = 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if(isset($_GET['purchase'])){
        if($_GET['purchase'] == "success"){?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: "You've successfully placed the order !",
                    text: "Thank you for your order."
                });
            </script>
            <?php
            }
        }
        ?>
    <style>
        body{
            background-color: <?=$row['body'];?>;
            color: <?=$row['text_color'];?> !important;
        }
        .offer-container, .cena, .slider-dugme, nav ul, .news, .card a button{
            background-color: <?=$row['primary_color'];?> !important;
        }
        .top, .footer-body, .news button{
            background-color: <?=$row['secondary_color'];?> !important;
        }
        .logo-text, .filter-naslov, .slider h4{
            color: <?=$row['text_color'];?> !important;
        }
        .buy-modal-body{
            left: 10% !important;
        }
    </style>
        <div class="top">
            <p>Email: aleksandardjukic1999@gmail.com</p>
        </div>
        <nav>
            <a href="index.php" class="logo-nav"><span>.</span>com shop</a>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i>&nbsp;Home</a></li>
                <?php 
                    if(isset($_SESSION['name'])){?>
                        <li><a href="#"><i class="fas fa-user"></i>&nbsp;<?=$_SESSION['name']?></a></li>
                        <li><a href="cart.php"><i class="fas fa-shopping-cart"></i>&nbsp;Cart</a></li>
                        <li><a href="action/logout.php"><i class="fas fa-power-off"></i>&nbsp;Log out</a></li>
                    <?php
                    }
                    else{?>
                        <li><a href="register.php"><i class="fas fa-user-plus"></i>&nbsp;Register</a></li>
                        <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a></li>
                    <?php }?>
            </ul>
        </nav>     
        <div class="cart-container">
            <div class="product-section">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th scope="col">Product name</th>
                            <th scope="col">Product price</th>
                            <th scope="col">Available</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $user_id = $_SESSION['id'];
                            $sql = "SELECT * FROM cart WHERE user_id =".$user_id;
                            $total = 0;
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){
                                $sql = "SELECT * FROM product WHERE id =".$row['product_id'];
                                $select = $conn->query($sql);
                                $item = $select->fetch_assoc();
                                $total = $total + $item['product_price'];?>
                                <tr>
                                    <td><?=$item['product_name'];?></td>
                                    <td><?=$item['product_price'];?></td>
                                    <td><?=$item['product_price'];?></td>
                                </tr>       
                            <?php }?>    
                    </tbody>
                </table>
            </div>
            <div class="buy-section">
                <form method="POST" action="action/buyFromCart.php">
                    <input type="hidden" name="user_id" value="<?=$_SESSION['id'];?>">
                    <p>Name</p>
                    <input type="text" name="name" value="<?=$_SESSION['name'];?>">
                    <p>Lastname</p>
                    <input type="text" name="lastname" value="<?=$_SESSION['lastname'];?>">
                    <p>Address</p>
                    <input type="text" name="address" value="<?=$_SESSION['address'];?>">
                    <p>Phone</p>
                    <input type="text" name="phone" value="<?=$_SESSION['phone'];?>">
                    <p class="total"><?=$total?>$</p>
                    <input type="submit" name="buySubmit"  value="Confirm">
                </form>
            </div>
        </div>
        <script src="js/buy-btn.js"></script>   
<?php
        require 'php/template/footer.php';
    }
    else{
        echo "<h1>ERROR !</h1>";
    }
?>
</body>