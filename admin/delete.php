<?php 
    require 'inc/head.php';
?>
<body>
    <?php 
    if(isset($_GET['delete'])){
        if($_GET['delete'] == "true"){?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'You add the product successfully!',
                });
            </script>
            <?php
        }
        if($_GET['delete'] == "false"){?>
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
    ?>
    <div class="logo-nav">
        <i class="fas fa-bars"></i>
    </div>
    <?php 
        require 'inc/nav.php';
    ?>
       <div class="container">
            <div class="form-group">
                <form method="post" action="action/delete.php">
                    <div class="update-top">
                        <h3>Delete product</h3>
                        <select name="id" id="delete-select" class="delete-select">
                        <option  value="" selected disabled hidden>Choose here</option>
                        <?php 
                            $sql = "SELECT * FROM product";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){?>
                            <option  value='<?=$row["id"];?>'><?=$row['id']." ".$row['product_name']." ".$row['product_price']?>$</option>
                        <?php 
                            }
                        ?>
                        </select>
                        <input type="submit" class="btn btn-danger" name="deleteSubmit">
                    </div>
                </form>   
            </div>
        </div>
    </form>
    <script src="js/nav.js"></script>
</body>

       


    