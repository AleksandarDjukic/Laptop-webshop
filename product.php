<?php 
  require 'php/functions.php';
  require 'php/config.php';
  session_start();
  $sql="SELECT * FROM theme WHERE id = 1";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $primary = $row['primary_color'];
  $secondary = $row['secondary_color'];
  $text = $row['text_color'];
  $body = $row['body'];
  if(isset($_GET['id'])){
    $sql = "SELECT * FROM product WHERE id=".$_GET['id'];
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    require 'php/template/head.php';
?>
  <body>
  <?php 
    if(isset($_GET['add'])){
        if($_GET['add'] == "notLoggedIn"){?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error !',
                    text: 'You must log in to use cart!',
                });
            </script>
            <?php
        }
    }
    if(isset($_GET['purchese'])){
      if($_GET['purchese'] == "success"){?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'You updated the product successfully!',
            });
        </script>
        <?php
      }
      if($_GET['purchese'] == "fail"){?>
          <script>
              Swal.fire({
                  icon: 'error',
                  title: 'Error !',
                  text: 'You failed to modify the product!',
              });
          </script>
          <?php
      }
    }
    ?>
  <?php
    require 'php/template/buyModal.php';
  ?>
    <style>
      body{
        background-color: <?=$body;?> !important;
      }
      nav ul, .p-about, .product-price, .buy-now, td, .footer-body, footer button ,.buy-modal-body{
        background-color: <?=$primary;?> !important;
      }
      .top, .add-to-cart, .bg-primary, .news, .buySubmit{
        background-color: <?=$secondary;?> !important;
      }
      .buy-modal-body{
        border: 2px solid <?=$secondary;?> !important;
        color: #fff;
      }
      tr{
        border-bottom: 1px solid <?=$secondary?>;
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
            <li class="p-r">
              <a href="cart.php"><i class="fas fa-shopping-cart"></i>&nbsp;Cart</a>
              <?php 
                if(isset($_GET['add'])){
                  if($_GET['add'] == "true"){
              ?>
                    <div class="add-notification">
                      <p>1 item added <span class="closebtn">&times;</span> </p>
                    </div>
              <?php
                  }
                }
              ?>
            </li>
            <li class="p-r"><a href="action/logout.php"><i class="fas fa-power-off"></i>&nbsp;Log out</a></li>
          <?php
          }
          else{?>
            <li><a href="register.php"><i class="fas fa-user-plus"></i>&nbsp;Register</a></li>
            <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a></li>
          <?php }?>
      </ul>
    </nav>
    <div class="sadrzaj">
        <div class="p-img">
            <img src="<?=$row['img']?>">
        </div>
        <div class="p-about">
          <div class="specs">
              <div class="spec-section">
                <img src="img/product_page/screenSize.png">
                <p>Screen size</p>
                <p><?=$row['screen_size']?></p>
              </div>
              <div class="spec-section">
                <img src="img/product_page/cpu.png">
                <p>Processor</p>
                <p><?=$row['cpu']?></p>
              </div>
              <div class="spec-section">
                <img src="img/product_page/ram.png">
                <p>RAM</p>
                <p><?=$row['ram']?> GB</p>
              </div>
              <div class="spec-section">
                <img src="img/product_page/storage.png">
                <p>Storage</p>
                <p>SSD <?=$row['storage']?> GB</p>
              </div>
          </div>
          <div class="payment">
            <ul>
              <?php
               if($row['quantity']>0){
                echo "<li class='stock'>&#10003; In stock</li>
                      <li>&#10003; Free delivery</li>";
               }
               else{
                echo "<li style='color:red;'>&#215; Out of Stock !</li>";
               }
              ?>
            </ul>
            <hr>
            <h6>Payment methods</h6>
            <input type="radio" name="pay"><p class="payment-p"> PayPal</p><br>
            <input type="radio" name="pay"><p class="payment-p"> Master Card</p><br>
            <input type="radio" name="pay"><p class="payment-p"> On delivery payment</p><br>
          </div>
      </div>
        <div class="price">
          <?php 
            if($row['quantity']<=0){?>
              <div class="product-price"><?=$row['product_price']?>$</div> 
          <?php
            }
            else{?>
              <div class="product-price"><?=$row['product_price']?>$</div> 
              <button class="buy-now">BUY NOW</button>
              <form action="action/cart.php" method="post">
                <input type="hidden" value="<?=$row['id'];?>" name="product_id">
                <?php
                  if(isset($_SESSION['id'])){
                    $value = $_SESSION['id'];
                    ?>
                    
                    <input type="hidden" value="<?=$value?>" name="user_id">
                  <?php
                  }
                  ?>
                <input type="submit" name="submitCart" class="add-to-cart" value="ADD TO CART">
              </form>
          <?php    
            }
          ?>
          </div>
    </div>
    <div class="desc">
      <details open  class="bg-primary">
        <summary>TECHNICAL SPECIFICATIONS</summary>
        <table>
          <tr>
            <td class="bg-primary"><img src="img/product_page/screenSize.png" alt="" class="table-img"></td>
            <td><p>Screen size</p></td>
            <td><p><?= $row['screen_size']."''  ".$row['resolution'];?></p></td>
          </tr>
          <tr>
            <td class="bg-primary"><img src="img/product_page/ram.png" alt="" class="table-img"></td>
            <td><p>RAM</p></td>
            <td><p><?=$row['ram'];?> GB <?=$row['ram_speed'];?></p></td>
          </tr>
          <tr>
            <td class="bg-primary"><img src="img/product_page/storage.png" alt="" class="table-img"></td>
            <td><p>Storage</p></td>
            <td><p>SSD <?=$row['storage'];?> GB</p></td>
          </tr>
          <tr>
            <td class="bg-primary"><img src="img/product_page/cpu.png" alt="" class="table-img"></td>
            <td><p>Processor</p></td>
            <td><p><?=$row['cpu']." ".$row['cpu_cores']." ". $row['cpu_freq'];?></p></td>
          </tr>
          <tr>
            <td class="bg-primary"><img src="img/product_page/table/gpu.png" alt="" class="table-img"></td>
            <td><p>Graphic card</p></td>
            <td><p><?= $row['gpu_name']." ".$row['gpu_memory']." ".$row['gpu_desc'];?></p></td>
          </tr>
          <tr>
            <td class="bg-primary"><img src="img/product_page/table/connect.png" alt="" class="table-img"></td>
            <td><p>Connectivity</p></td>
            <td><p><?=$row['connection'];?></p></td>
          </tr>
          <tr>
            <td class="bg-primary"><img src="img/product_page/table/color.png" alt="" class="table-img"></td>
            <td><p>Color</p></td>
            <td><p><?=$row['color'];?></p></td>
          </tr>
          <tr>
            <td class="bg-primary"><img src="img/product_page/table/os.png" alt="" class="table-img"></td>
            <td><p>Operating system</p></td>
            <td><p><?=$row['os'];?></p></td>
          </tr>
          <tr>
            <td class="bg-primary"><img src="img/product_page/table/weight.png" alt="" class="table-img"></td>
            <td><p>Weight</p></td>
            <td><p><?=$row['weight'];?></p></td>
          </tr>
          <tr>
            <td class="bg-primary"><img src="img/product_page/table/port.png" alt="" class="table-img"></td>
            <td><p>Ports</p></td>
            <td><p><?=$row['port'];?></p></td>
          </tr>
          <tr>
            <td class="bg-primary"><img src="img/product_page/table/other.png" alt="" class="table-img"></td>
            <td><p>Product name</p></td>
            <td><?=$row['product_name'];?></td>
          </tr>
        </table>
      </details>
      <details class="bg-primary">
        <summary>PRODUCT DESCRIPTION</summary>
        <p class="desc-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis orci fringilla, placerat dolor ut, lacinia tellus. Praesent fringilla pretium lacus et ornare. Nunc tempor, velit ut dignissim egestas, mi nunc tristique velit, vitae venenatis nibh urna in libero. Vivamus et lacinia tellus. Mauris vestibulum iaculis lorem eu vehicula. Nulla blandit interdum consequat. Mauris euismod vestibulum dolor. Praesent consequat ligula eu facilisis porttitor. Aliquam lobortis enim et diam gravida, non interdum erat faucibus.</p>
      </details>
    </div>
    <?php
      require 'php/template/footer.php';
    ?>
    <script src="js/buy-btn.js"></script>
    <script src="js/main.js"></script>
  </body>
  <?php
    }
    else{
      echo "<H1>ERROR !</H1>";
    }
  ?>