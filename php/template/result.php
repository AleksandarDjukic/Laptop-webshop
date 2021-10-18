<div class="col-lg-9">
				<div class="row" id="result">
					<?php 
					$sql = "SELECT * FROM product";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					?>
					<div class="col-md-3 mb-2">
						<div class="card-deck">
							<div class="card boreder-secondary animate__animated animate__fadeInUp">
								<div class="slika">
									<img src="<?= $row['img'];?>" class="card-img-top">
								</div>
								<div class="cena">
									<p><?= $row['product_price'];?>$</p>
								</div>
								<div class="podaci">
									<p><?= $row['product_name'] ?></p>
									<p>Processor: <?= $row['cpu'];?></p>
									<p>RAM: <?= $row['ram']." GB";?></p>
									<p>Storage: <?= $row['storage']." GB";?></p>
									<p>Screen size: <?= $row['screen_size']." ''";?></p>
								</div>
								<?= "<a href='product.php?id=".$row['id']."'target='_blank'><button>BUY NOW</button></a>";?>
							</div>
						</div>
					</div>
				<?php }?>
				</div>
			</div>
		</div>