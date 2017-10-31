<?php 
	error_reporting(0);
	require_once 'include/db_connect.php';
	
	$sorting = $_GET["sort"];

	switch ($sorting){
		case 'price-asc';
		$sorting = 'price ASC';
		$sort_name = 'От дешевых к дорогим';
		break;

		case 'price-desc';
		$sorting = 'price DESC';
		$sort_name = 'От дорогих к дешевым';
		break;

		case 'popular';
		$sorting = 'count DESC';
		$sort_name = 'Популярное';
		break;

		case 'brand';
		$sorting = 'brand';
		$sort_name = 'от А до Я';
		break;

		default: 
		$sorting = 'id DESC';
		$sort_name = 'Без сортировки';
		break;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/style.css">
	
	<title>Filter parametrs</title>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php
	include("include/header.php");
?>

<main>
	<div class="container">
		<div class="breadcrumb-product-sledge">
			<ol class="breadcrumb">
			  <li><a href="index.php">Главная</a></li>
			  <li class="active"><a href="winter_transport.php">Зимний активный отдых</a></li>
			</ol>
		</div>
		<div class="content-block">
			<?php 
			include("include/selection_by_parameters_winter.php")
			?>
			
			<div class="sledge_product">
				<div class="sort_product_block">
					<ul id="options-list">
						<li>Вид:</li>
						<li id="style-grid"><a href="#"><span class="glyphicon glyphicon-th"></a></li>
						<li id="style-list"><a href="#"><span class="glyphicon glyphicon-th-list"></a></li>
						
						<li>Сортировать:</li>
						<li id="select-sort"><a href="#" ><?php echo $sort_name; ?></a>
							<span class="caret"></span>
							<ul id="sorting-list">
								<li><a href="?&sort=price-asc">От дешовых к дорогим</a></li>
								<li><a href="?&sort=price-desc">От дорогих к дешовым</a></li>
								<li><a href="?&sort=popular">Популярное</a></li>
								<li><a href="?&sort=brand">От А до Я</a></li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="product_block">
		<!-- 		<div class="container"> -->
						<div class="row">
							<?php 
								if ($_GET["brand"]){
									$check_brand = implode(',', $_GET["brand"]);
								}

								if ($_GET["manufacturer_country"]) {
									$check_country = implode(',', $_GET["manufacturer_country"]);
								}
								if ($_GET["under_type"]){
									$check_type_transport = implode(',', $_GET["under_type"]);
								}

								$min_price = (int)$_GET["min_price"];
								$max_price = (int)$_GET["max_price"];
								
								$check_seats = (int)$_GET["seats"];

								if (!empty($check_brand) OR !empty($max_price) OR !empty($check_country)) {
									if(!empty($check_brand)) $query_brand = " AND brand_id IN($check_brand)";
									if(!empty($check_country)) $query_country = " AND manufacturer_country_id IN($check_country)";
									if (!empty($check_type_transport)) $query_type_transport = " AND under_type_transport_id IN($check_type_transport)";
									if(!empty($check_seats)) $query_seats = " AND seats IN($check_seats)";
									if(!empty($max_price)) $query_price = " AND price BETWEEN $min_price AND $max_price";

								}
								

								$query = "SELECT * FROM table_all_products 
											WHERE visible='1' && type_transport='winter_transport' $query_brand $query_price $query_country $query_seats $query_type_transport
											ORDER BY price ASC";

								$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
								$rows = mysqli_num_rows($result);

								if ($rows > 0) {
									$row = mysqli_fetch_array($result);
									do {
										echo '
											  <div class="col-xs-6 col-md-3">
												  <div class="product-block-i">
												  	<a href="#" class="thumbnail">
												      <img src="img/products/'.$row["image"].'">
												    </a>
												    <div class="caption">
														<h5>'.$row["title"].'</h5>
														<span class="price_block">'.$row["price"].' грн.</span>
														<p>
															<ul class="btn-group-product-i">
																<li><a href="#"><img src="img/icon_shopping_cart.png" alt=""></a></li>
																<li><a href="#" class="favorit_icon"><img src="img/icon_heart.png" alt=""></a></li>
																<li><a href="#"><img src="img/icon_review.png" alt=""></a></li>
															</ul>
														</p>
													</div>
												  </div>
											  </div>

										';

									} while ($row = mysqli_fetch_array($result));
								}	
							?>
						</div>
					<!-- </div> -->
				</div>
				
			</div>		
		</div>
			
	</div>
	



	</div>
	
	
	
	
</main>


<?php 
	include("include/footer.php");

?>





 <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>	
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/shop.js"></script>

</body>
</html>