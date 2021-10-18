<?php 
    session_start();
    require 'php/config.php';
    require 'php/template/head.php';
    $sql="SELECT * FROM theme WHERE id = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(isset($_GET['registeredSuccessfully'])){
        if($_GET['registeredSuccessfully'] == "true"){?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'You have regitered successfully, please log in.'
                });
            </script>
            <?php
        }
    }
    if(isset($_GET['error'])){
        if($_GET['error'] == "invalidEmail"){?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Please enter valid email.'
                });
            </script>
            <style>
                input[type=email]{
                    border: 2px solid red;
                }
            </style>
            <?php
        }
        if($_GET['error'] == "invalidPassword"){?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Please enter valid password.'
                });
            </script>
            <style>
                input[type=password]{
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
<form method="POST" action="action/login.php" class="reg-form">
    <div class="form-div">
        <p class="reg-label">Email</p>
        <input type="email" name="email" placeholder="example@mail.com">
    </div>
    <div class="form-div">
        <p class="reg-label">Password</p>
        <input type="password" name="password" placeholder="8-16 characters">
    </div>
    <div class="form-div">
        <input type="submit" name="loginSubmit" value="Login">
    </div>
    <div class="login-link">
        <p>I forgot my </p><a href="#">&nbsp;password</a>
    </div>
    <div class="login-link">
        <p>I don't have account</p><a href="#">&nbsp;Register</a>
    </div>
</form>