<?php
    session_start();
    require '../php/config.php';
    require '../php/functions.php';
    if(isset($_SESSION['id'])){
	    require 'inc/head.php';
?>	
<body>
<?php 
    if(isset($_GET['update'])){
        if($_GET['update'] == "true"){?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'You updated the product successfully!',
                });
            </script>
            <?php
        }
        if($_GET['update'] == "false"){?>
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
    require 'inc/nav.php';
    ?>
       <div class="container">
            <div class="form-group">
                <form method="post" action="action/update.php">
                    <div class="update-top">
                        <h3>Select product</h3>
                        <select id="update-select" class="update-select">
                        <option value="" selected disabled hidden>Choose here</option>
                        <?php 
                            $sql = "SELECT * FROM product";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){?>
                            <option value='<?=$row["id"];?>'><?=$row['id']." ".$row['product_name']." ".$row['product_price']?>$</option>
                        <?php 
                            }
                        ?>
                        </select>
                    </div>
                    <div id="rezultat">       
                    </div>
                </form>
            </div>
        </div>
    </form>
    <script src="js/nav.js"></script>
    <script src="js/update.js"></script>
</body>
<?php
}
else{
    echo "Access denied";
}
?>