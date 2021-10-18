<?php
    session_start();
    require '../php/config.php';
    require '../php/functions.php';
    if(isset($_SESSION['id'])){
	    require 'inc/head.php';
?>	
<body>
<?php 
    if(isset($_GET['theme'])){
        if($_GET['theme'] == "true"){?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'The theme has changed successfully!',
                });
            </script>
            <?php
        }
        if($_GET['theme'] == "false"){?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error !',
                    text: 'The theme has not changed. An error has occurred',
                });
            </script>
            <?php
        }
    }
    else if(isset($_GET['default'])){
        if($_GET['default'] == "true"){?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'The theme has restored successfully!',
                });
            </script>
            <?php
        }
    }
    ?>
    <?php
        require 'inc/nav.php';
    ?>
    <?php
    $sql="SELECT * FROM theme WHERE id = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
    <style>
        .theme-preview{
            background-color:<?=$row['body'];?>;
        }
        .theme-nav, .theme-h-button, .offer, .price-preview, .buy-preview, .footer-preview{
            background-color:<?=$row['primary_color'];?>;
        }
        .theme-top, .footer-top-preview{
            background-color:<?=$row['secondary_color'];?>;
        }
        .text-preview{
            color:<?=$row['text_color'];?>;
        }
    </style>
    <div class="container">
        <div class="theme">
        <form class="theme-form" method="post" action="action/theme.php"> 
            <label for="body-bg">Background:</label>
            <input type="color" id="body-bg" name="body-bg" value="<?=$row['body'];?>"><br>
            <label for="primary-color">Primary color:</label>
            <input type="color" id="primary-color" name="primary-color" value="<?=$row['primary_color'];?>"><br>
            <label for="secondary-color">Secondary color:</label>
            <input type="color" id="secondary-color" name="secondary-color" value="<?=$row['secondary_color'];?>"><br>
            <label for="text-color">Text color:</label>
            <input type="color" id="text-color" name="text-color" value="<?=$row['text_color'];?>"><br>
            <input type="submit" name="updateColor">
        </form>
        <input type="submit" id="preview" value="Preview">
        <div class="theme-preview" id="theme-preview">
            <div class="theme-top" id="theme-top"></div>
            <div class="theme-nav" id="theme-nav"></div>
            <div class="theme-h-button" id="theme-h-button"></div>
            <div class="offer" id="offer"></div>
            <div class="filter-preview">
                <p class="text-preview">FILTERS</p>
            </div>
            <div class="card-preview">
                <div class="price-preview"></div>
                    <p class="text-preview m40">Product info</p>
                <div class="buy-preview"></div>
            </div>
            <div class="card-preview2">
                <div class="price-preview"></div>
                    <p class="text-preview m40">Product info</p>
                <div class="buy-preview"></div>
            </div>
            <div class="card-preview3">
                <div class="price-preview"></div>
                    <p class="text-preview m40">Product info</p>
                <div class="buy-preview"></div>
            </div>
            <div class="card-preview4">
                <div class="price-preview"></div>
                    <p class="text-preview m40">Product info</p>
                <div class="buy-preview"></div>
            </div>
            <div class="footer-top-preview" id="footer-top-preview"></div>
            <div class="footer-preview" id="footer-preview">
            </div>
        </div>
        </div>
        <form method="post" action="action/default-theme.php">
            Back to default theme<input type="submit" name="default" value="Restore">
        </form> 
    </div>
    <script src="js/nav.js"></script>
    <script src="js/theme.js"></script>
</body>
<?php
}
else{
    echo "Access denied";
}
?> 