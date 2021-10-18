<?php 
	session_start();
    $sql="SELECT * FROM theme WHERE id = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();?>
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
	<div class="slider">
		<a href="#" class="slider-dugme">TAKE A LOOK</a>
		<h4>Laptop buying guide<br> Essential tips to know before you buy</h4>
	</div>
	<div class="offer-container animate__animated animate__fadeInLeftBig">
		<h5>What are our benefits?</h5>
		<div class="offer-box">
			<div class="offer">
				<p>Member exclusive deals</p>
				<i class="fas fa-user-friends"></i>
			  </div>
			<div class="offer">
				<p>The lowest price on market</p>
				<i class="fas fa-money-check"></i>
			</div>
			<div class="offer">
				<p>Delivery in short time</p>
				<i class="fas fa-truck"></i>
			</div>
			<div class="offer">
				<p>24/7 Customer support</p>
				<i class="fas fa-headset"></i>
			</div>
		</div>
	  </div>