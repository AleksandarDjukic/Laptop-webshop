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
    <div class="row">
        <div class="col">
        <div class="last-purchase">
        <h4 class="heading">Last purchases</h4>
                    <?php
                    $sql = "SELECT * FROM purchase LEFT JOIN product ON purchase.product_id = product.id ORDER BY purchase_date DESC LIMIT 3;";
                    $result = $conn->query($sql);
                        while($item = $result->fetch_assoc()){?>
                        <div class="lp-card">
                            <img  src="../<?=$item['img'];?>">
                            <div class="lp-desc" >
                            <?=$item['product_name'];?><br>
                            Price: <?=$item['product_price'];?>$<br>
                            Date: 
                            <?php
                                $t = $item['purchase_date'];
                                $time = strtotime($t);
                                $newformat = date('d/m/Y h:i:s',$time);
                                echo $newformat;
                            ?><br>
                                Number of purchases: <?=$item['no_purchases'];?><br>
                                Remain on stock: <?=$item['quantity']?><br>
                        </div>
                    </div>
                    
                    <?php
                    }
                    ?>
            </div>
        </div>
        <div class="col">
                <div class="best-selling">
                <h4 class="heading">The best seling products</h4>
                        <?php
                        $sql = "SELECT * FROM product ORDER BY no_purchases DESC LIMIT 3;";
                        $result = $conn->query($sql);
                            while($item = $result->fetch_assoc()){?>
                            <div class="lp-card">
                                <img  src="../<?=$item['img'];?>">
                                <div class="lp-desc" >
                                <?=$item['product_name'];?><br>
                                Price: <?=$item['product_price'];?>$<br>
                                Number of purchases: <?=$item['no_purchases'];?><br>
                                Remain on stock: <?=$item['quantity']?><br>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
            </div>
        </div>
        <div class="col">
            <div class="earnings">
                <h3>Today Earnings: <?=lastDayPurchase($conn);?>$</h3>
                <h3>Total Earnings: <?=totalPurchasePrice($conn);?>$</h3>
            </div>
        </div>
    </div>
</div>
    <script src="js/nav.js"></script>
</body>
<?php
}
else{
    echo "Access denied";
}
?>