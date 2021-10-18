<div class="row  animate__animated animate__fadeInUp">
			<div class="filteri-naslov" id="f-naslov">
				<h5>Filteri</h5><br>
				<div class="strelica">
					<i class="fas fa-sort-down"></i>
				</div>
			</div>
			<div class="col-lg-3 filter-nav">
				<div class="filter-heading">
					<h5 class="logo-text">DotCom Shop<br> Filter products</h5>
				</div>
				<h6 class="filter-naslov">Sort by</h6>
				<ul class="list-group">
					<li class="list-group-item">
						<div class="form-check">
							<label class="form-check-label">
								<select class="sort">
									<option value="" selected disabled hidden>Choose here</option>
									<option value="najjeftinije">Price-Low to high</option>
									<option value="najskuplje">Price-High to low</option>
									<option value="najnovije">Newest to oldest</option>
									<option value="najstarije">Oldest to newest</option>
								</select>
							</label>
						</div>
					</li>
				</ul>
				<h6 class="filter-naslov">Select Brand</h6>
				<ul class="list-group">
					<?php
						$sql = "SELECT DISTINCT brand FROM product order by brand";
						$result = $conn->query($sql);
						while ($row= $result->fetch_assoc()){
						?>
							<li class="list-group-item">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="product_check" value="<?= $row['brand']; ?>" id="brand"><?= $row['brand']; ?>
									</label>
								</div>
							</li>
						<?php }?>
				</ul>
				<h6 class="filter-naslov">Select Processor</h6>
				<ul class="list-group">
					<?php
						$sql = "SELECT DISTINCT cpu_brand FROM product order by cpu_brand";
						$result = $conn->query($sql);
						while ($row= $result->fetch_assoc()){
						?>
							<li class="list-group-item">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="product_check" value="<?= $row['cpu_brand']; ?>" id="cpu_brand"><?= $row['cpu_brand']; ?>
									</label>
								</div>
							</li>
						<?php }?>
				</ul>
				<h6 class="filter-naslov">Select RAM</h6>
				<ul class="list-group">
					<?php
						$sql = "SELECT DISTINCT ram FROM product order by ram asc";
						$result = $conn->query($sql);
						while ($row= $result->fetch_assoc()){
						?>
							<li class="list-group-item">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="product_check" value="<?= $row['ram']; ?>" id="ram"><?php echo $row['ram']." GB"; ?>
									</label>
								</div>
							</li>
						<?php }?>
				</ul>
				<h6 class="filter-naslov">Select storage</h6>
				<ul class="list-group">
					<?php
						$sql = "SELECT DISTINCT storage FROM product order by storage asc";
						$result = $conn->query($sql);
						while ($row= $result->fetch_assoc()){
						?>
							<li class="list-group-item">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="product_check" value="<?= $row['storage']; ?>" id="storage"><?php echo $row['storage']." GB"; ?>
									</label>
								</div>
							</li>
						<?php }?>
				</ul>
				<h6 class="filter-naslov">Select screen size</h6>
				<ul class="list-group">
					<?php
						$sql = "SELECT DISTINCT screen_size FROM product order by screen_size desc";
						$result = $conn->query($sql);
						while ($row= $result->fetch_assoc()){
						?>
							<li class="list-group-item">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="product_check" value="<?= $row['screen_size']; ?>" id="screen_size"><?php echo $row['screen_size']."''"; ?>
									</label>
								</div>
							</li>
						<?php }?>
				</ul>
</div>