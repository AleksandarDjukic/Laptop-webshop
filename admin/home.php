<?php
    session_start();
    require '../php/config.php';
    require '../php/functions.php';
    if(isset($_SESSION['id'])){
	    require 'inc/head.php';
?>	
<body>
    <?php 
        require 'inc/nav.php';
    ?>
    <div class="container">
        <div class="home-heading">
            <h3>Warehouse review</h3>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Product name</th>
                <th scope="col">Product price</th>
                <th scope="col">In stock</th>
                <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM product";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){?>
                        <tr>
                        <th scope="row"><?=$row['id'];?></th>
                        <td><?=$row['product_name'];?></td>
                        <td><?=$row['product_price'];?></td>
                        <?php 
                            if($row['quantity']>0){
                                echo "<td><i class='fas fa-check'></i></td>";
                            }
                            else {
                                echo "<td><i class='fas fa-times'></i></td>";
                            }
                        ?>
                        <td class="quan"><?=$row['quantity'];?></td>
                        </tr>
                    <?php    
                    }
                ?>     
            </tbody>
        </table>
    </div>
    <script src="js/nav.js"></script>
</body>
<?php
}
else{
    echo "Access denied";
}
?>

       


    