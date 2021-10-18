<?php 
	require '../php/config.php';
	if (isset($_POST['action'])) {
		$sql = "SELECT * FROM product WHERE brand !=''";
		if(isset($_POST['brand'])){
			$brand  = implode("','", $_POST['brand']);
			$sql .= "AND brand IN('".$brand."')";
		}
		if(isset($_POST['cpu_brand'])){
			$cpu_brand  = implode("','", $_POST['cpu_brand']);
			$sql .= "AND cpu_brand IN('".$cpu_brand."')";
		}
		if(isset($_POST['ram'])){
			$ram  = implode("','", $_POST['ram']);
			$sql .= "AND ram IN('".$ram."')";
		}
		if(isset($_POST['storage'])){
			$storage  = implode("','", $_POST['storage']);
			$sql .= "AND storage IN('".$storage."')";
		}
		if(isset($_POST['screen_size'])){
			$screen_size  = implode("','", $_POST['screen_size']);
			$sql .= "AND screen_size IN('".$screen_size."')";
		}
		if (isset($_POST['sort'])){
			$nacin = $_POST['sort'];
			if ($nacin == 'najskuplje') {
				$sql .= "ORDER BY product_price DESC";
			}
			else if($nacin == 'najjeftinije'){
				$sql .= "ORDER BY product_price ASC";
			}
			else if($nacin == 'najnovije'){
				$sql .= "ORDER BY id DESC";
			}
			else if($nacin == 'najstarije'){
				$sql .= "ORDER BY id ASC";
			}
		}
		$result = $conn->query($sql);
		$output = '';
		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
				$output .= 
				'<div class="col-md-3 mb-2">
				<div class="card-deck">
					<div class="card boreder-secondary animate__animated animate__fadeInUp">
						<div class="slika">
							<img src="'. $row['img'] .'" class="card-img-top">
						</div>
						<div class="cena">
							<p>'. $row['product_price'].'$</p>
						</div>
						<div class="podaci">
							<p>'. $row['product_name'] .'</p>
							<p>Processor: '. $row['cpu'].'</p>
							<p>RAM: '. $row['ram']. ' GB</p>
							<p>Storage: '.$row['storage'].' GB</p>
							<p>Screen size: '.$row['screen_size']." ''".'</p>
						</div>
							<a href="product.php?id='.$row['id'].'" target="_blank"><button>BUY NOW</button></a>
						</div>
					</div>
				</div>';
			}
			$output = $output;
		}
		else
			$output = "<h1>No products !</h1>";
	}
	echo $output;
?>