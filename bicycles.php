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
	
	<title>Bicycles</title>

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
			  <li class="active"><a href="bicycles.php">Велосипеды</a></li>
			</ol>
		</div>
		<div class="content-block">
			<?php 
			include("include/selection_by_parameters_bicycles.php")
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
								<li><a href="?sort=price-asc">От дешовых к дорогим</a></li>
								<li><a href="?sort=price-desc">От дорогих к дешовым</a></li>
								<li><a href="?sort=popular">Популярное</a></li>
								<li><a href="?sort=brand">От А до Я</a></li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="product_block">
		<!-- 		<div class="container"> -->
						<div class="row">
							<?php 
								$query = "SELECT * FROM table_all_products WHERE type_transport='bicycles' && visible='1' ORDER BY $sorting";
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
														<h5><a href="#">'.$row["title"].'</a></h5>
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