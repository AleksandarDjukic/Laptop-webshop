<?php 
    session_start();
    require 'php/config.php';
    require 'php/template/head.php';
    $sql="SELECT * FROM theme WHERE id = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyInput"){?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Please fill in all the required fields!'
                });
            </script>
            <style>
                input[type=text], input[type=email], input[type=password]{
                    border: 2px solid red;
                }
            </style>
            <?php
        }
        if($_GET['error'] == "invalidPass"){?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Password must be 8-12 characters!'
                });
            </script>
            <style>
               input[type=password]{
                    border: 2px solid red;
                }
            </style>
            <?php
        }
        if($_GET['error'] == "passRpt"){?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Passwords do not match!'
                });
            </script>
            <style>
               input[type=password]{
                    border: 2px solid red;
                }
            </style>
            <?php
        }
        if($_GET['error'] == "invalidEmail"){?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Somebody already use that email!'
                });
            </script>
            <style>
               input[type=email]{
                    border: 2px solid red;
                }
            </style>
            <?php
        }
    }
?>
<style>
    body{
        background-color: <?=$row['body'];?>;
        color: <?=$row['text_color'];?> !important;
    }
	nav ul{
		background-color: <?=$row['primary_color'];?> !important;
	}
	.top, .footer-body, .news button, .reg-form{
		background-color: <?=$row['secondary_color'];?> !important;
	}
	.logo-text, .filter-naslov, .slider h4{
		color: <?=$row['text_color'];?> !important;
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
          <li><a href="#"><i class="fas fa-shopping-cart"></i>&nbsp;Cart</a></li>
          <li><a href="action/logout.php"><i class="fas fa-power-off"></i>&nbsp;Log out</a></li>
        <?php
        }
        else{?>
          <li><a href="register.php"><i class="fas fa-user-plus"></i>&nbsp;Register</a></li>
          <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a></li>
        <?php }?>
    </ul>
  </nav>
<form method="POST" action="action/register.php" class="reg-form">
    <div class="form-div">
        <p class="reg-label">Email</p>
        <input type="email" name="email" id="email" placeholder="example@mail.com">
    </div>
    <div class="form-div">
        <p class="reg-label">Password</p>
        <input type="password" name="password" id="password" placeholder="8-16 characters">
    </div>
    <div class="form-div">
        <p class="reg-label">Repeat password</p>
        <input type="password" name="passwordRepeat" id="rptPassword" placeholder="8-16 characters">
    </div>
    <div class="form-div">
        <p class="reg-label">Name</p>
        <input type="text" name="name" id="name" placeholder="John">
    </div>
    <div class="form-div">
        <p class="reg-label">Last name</p>
        <input type="text" name="lastname" id="lastname" placeholder="Doe">
    </div>
    <div class="form-div">
        <p class="reg-label">Address</p>
        <input type="text" name="address" id="address" placeholder="Country, City, Street #">
    </div>
    <div class="form-div">
        <p class="reg-label">Phone number</p>
        <input type="text" name="phone" id="phone" placeholder="+381 66 123 456">
    </div>
    <div class="form-div">
        <input type="submit" name="registerSubmit" value="Register">
    </div>
    <div class="login-link">
        <p>I already have account </p><a href="#">&nbsp;Log in</a>
    </div>
</form>
