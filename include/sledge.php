<?php 
	require_once 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/style.css">
	<title>Template</title>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php
	include("../include/header.php");
?>

<main>
	<div class="container">
		<div class="breadcrumb-product-sledge">
			<ol class="breadcrumb">
			  <li><a href="../index.php">Главная</a></li>
			  <li><a href="#">Зимний активный отдых</a></li>
			  <li class="active">Санки</li>
			</ol>
		</div>
		<div class="content-block">
			<?php 
			include("selection_by_parameters.php")
			?>
			
			<div class="sledge_product">
				<div class="sort_product_block">
					<span>Сортировать по:</span>
					<div class="sort_product">
						<ul>
							<li>
								<form action="" method="GET" class="sort_product_type">
									<select class="form-control">
									  <option>по рейтингу</option>
									  <option>от дешевыых к дорогих</option>
									  <option>от дорогих к дешевым</option>
									</select>
								</form>
							</li>
							<li><a href="#"><span class="glyphicon glyphicon-th"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon-th-list"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="product_block">
					<?php 
						$query = "SELECT * FROM table_winter_products";
						$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
						$rows = mysqli_num_rows($result);

						if ($rows > 0) {
							$row = mysqli_fetch_array($result);
							do {
								echo '
								<p>'.$row["title"].'</p>

								';

							} while ($row = mysqli_fetch_array($result));
						}
					?>


				</div>
				
			</div>		
		</div>
			
	</div>
	



	</div>
	
	
	
	
</main>


<?php 
	include("../include/footer.php");

?>





 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>	

    <script src="../app/js/init.js"></script>

</body>
</html>