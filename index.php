<?php 
	require_once 'include/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
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
	include("include/header.php");
?>

<main>
	
	<div class="content-block">
		<div class="container">
			<div class="categories-product">
				<div class="categories">
					<ul class="list-group categories-title"><p>Категории товаров:</p>
						<li class="list-group-item"><a href="winter_transport.php">Зимний активный отдых</a></li>
						<li class="list-group-item"><a href="bicycles.php">Велоcипеды</a></li>
						<li class="list-group-item"><a href="#">Самокаты</a></li>
						<li class="list-group-item"><a href="#">Скейты и пенниборды</a></li>
						<li class="list-group-item"><a href="#">Электротранспорт</a></li>
						<li class="list-group-item"><a href="#">Ролики</a></li>
						<li class="list-group-item"><a href="#">Все для безопасности</a></li>
					</ul>
				</div>
			</div>

			<div class="product-group-full">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="tumbnail product-group-list">
							<img src="img/product-list-img1.jpg" alt="Зимний активный отдых">
							<div class="caption">
								<ul><h4>Зимний активный отдых</h4>
									<li><a href="winter_transport.php">Санки</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Ледянки</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Снегокаты</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Круги</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Доски</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Снежколепы</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Лыжи</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Коньки</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Аксессуары</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="winter_transport.php">Весь зимний ассортимент</a><span class="glyphicon glyphicon-arrow-right"></span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="tumbnail product-group-list">
							<img src="img/product-list-img2.jpg" alt="Велосипеды">
							<div class="caption">
								<ul><h4>Велосипеды</h4>
									<li><a href="#">Двухколесные</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Трехколесные</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Четырехколесные</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Беговелы</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="#">Аксессуары</a><span class="glyphicon glyphicon-menu-right"></span></li>
									<li><a href="bicycles.php">Весь ассортимент велосипедов</a><span class="glyphicon glyphicon-arrow-right"></span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="tumbnail product-group-list">
							<img src="img/product-list-img3.jpg" alt="Скейты">
							<div class="caption">
								<ul><h4>Скейты</h4>
									<li><a href="#"><a href="#">Скейты</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Пенниборды</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Аксессуары</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Весь ассортимент скейтов</a><span class="glyphicon glyphicon-arrow-right"></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="tumbnail product-group-list">
							<img src="img/product-list-img4.jpg" alt="Самокаты">
							<div class="caption">
								<ul><h4>Самокаты</h4>
									<li><a href="#">Двухколесные</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Трехколесные</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Аксессуары</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Весь ассортимент самокатов</a><span class="glyphicon glyphicon-arrow-right"></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="tumbnail product-group-list">
							<img src="img/product-list-img5.jpg" alt="Электротранспорт">
							<div class="caption">
								<ul><h4>Электротранспорт</h4>
									<li><a href="#">Гироборды</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Моноколеса</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Гироскутеры</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Моноскейты</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Электроскейты</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Аксессуары</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Весь ассортимент электротранспорта</a><span class="glyphicon glyphicon-arrow-right"></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="tumbnail product-group-list">
							<img src="img/product-list-img6.jpg" alt="Ролики">
							<div class="caption">
								<ul><h4>Ролики</h4>
									<li><a href="#">Для мальчиков</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Для девочек</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Аксессуары</a><span class="glyphicon glyphicon-menu-right"></li>
									<li><a href="#">Весь ассортимент роликов</a><span class="glyphicon glyphicon-arrow-right"></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="product-group-brands">
				<h3>Бренды</h3>
				<div class="row">
  					<div class=" col-xs-4 col-md-2">
  						<a href="#"><img src="img/adber.png" alt=""></a>
  					</div>
  					<div class=" col-xs-4 col-md-2">
  						<a href="#"><img src="img/milly_mally.png" alt=""></a>
  					</div>
  					<div class=" col-xs-4 col-md-2">
  						<a href="#"><img src="img/puky.jpg" alt=""></a>
  					</div>
  					<div class=" col-xs-4 col-md-2">
  						<a href="#"><img src="img/adber.png" alt=""></a>
  					</div>
  					<div class=" col-xs-4 col-md-2">
  						<a href="#"><img src="img/adber.png" alt=""></a>
  					</div>
  					<div class=" col-xs-4 col-md-2">
  						<a href="#"><img src="img/adber.png" alt=""></a>
  					</div>
  				</div>
			</div>
		</div>
			
	</div>
	
	
</main>


<?php 
	include("include/footer.php");

?>





 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	

    <script src="../app/js/init.js"></script>

</body>
</html>