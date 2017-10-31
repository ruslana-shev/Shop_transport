<div class="catalog_filter_block">
	<form class="filter_parametrs" action="./filter_parametrs_winter.php" method="GET" id="filter_parameters_form">

		<div class="filter_parametrs_i" param="type_transport">
			<div class="filter_parametrs_i_header">
				<span>Для зимнего активного отдыха</span>
			</div>
			<div class="filter_parametrs_i_checkbox checkbox">
				<ul>
					<?php 
						$query = "SELECT * FROM type_transport WHERE type='winter_transport'";
						$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
						$rows = mysqli_num_rows($result);

						if ($rows > 0) {
							$row = mysqli_fetch_array($result);
							do {
								$checked_type_transport = "";
								if ($_GET["under_type"]) {
									if (in_array($row["id"], $_GET["under_type"])){
										$checked_type_transport = "checked";
									}
								}
								echo '
								<li>
									<label>
										<input '.$checked_type_transport.' type="checkbox" name="under_type[]" value="'.$row["id"].'" id="check_type_transport_'.$row["id"].'">'.$row["under_type"].'
									</label> 
								</li>
								';
							} while ($row = mysqli_fetch_array($result));
						}
					?>
				</ul>
			</div>
		</div>

		<div class="filter_parametrs_i" param="brand">
			<div class="filter_parametrs_i_header">
				<span>Брэнд</span>
			</div>
			<div class="filter_parametrs_i_checkbox checkbox">
				<ul>
					<?php 
						$query = "SELECT * FROM brand WHERE category='winter_transport' ";
						$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
						$rows = mysqli_num_rows($result);

						if ($rows > 0) {
							$row = mysqli_fetch_array($result);
							do {
								$checked_brand = "";
								if ($_GET["brand"]) {
									if (in_array($row["id"], $_GET["brand"])){
										$checked_brand = "checked";
									}
								}

								echo '
								<li>
									<label>
										<input '.$checked_brand.' type="checkbox" name="brand[]" value="'.$row["id"].'" id="checkbrand_'.$row["id"].'">'.$row["brand"].'
									</label> 
								</li>
								';
							} while ($row = mysqli_fetch_array($result));
						}
					?>
			</div>
		</div>



		<div class="filter_parametrs_i" param="manufacturer_country">
			<div class="filter_parametrs_i_header">
				<span>Страна производитель</span>
			</div>
			<div class="filter_parametrs_i_checkbox checkbox">
				<ul>
					<?php 
						$query = "SELECT * FROM brand WHERE visible='1' && category='winter_transport'";
						$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
						$rows = mysqli_num_rows($result);

						if ($rows > 0) {
							$row = mysqli_fetch_array($result);
							do {
								$checked_country = "";
								if ($_GET["manufacturer_country"]) {
									if (in_array($row["id"], $_GET["manufacturer_country"])){
										$checked_country = "checked";
									}
								}
								echo '
								<li>
									<label>
										<input '.$checked_country.' type="checkbox" name="manufacturer_country[]" value="'.$row["id"].'" id="checkcountry_'.$row["id"].'">'.$row["manufacturer_country"].'
									</label> 
								</li>
								';
							} while ($row = mysqli_fetch_array($result));
						}
					?>
				</ul>
			</div>
		</div>
		<div class="filter_parametrs_i" param="seats">
			<div class="filter_parametrs_i_header">
				<span>Посадочных мест</span>
			</div>
			<div class="filter_parametrs_i_checkbox checkbox">
				<ul>
					<?php 
						$query = "SELECT * 
								FROM table_all_products 
								WHERE visible='1' && type_transport='winter_transport'
								GROUP BY seats";
						$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
						$rows = mysqli_num_rows($result);

						if ($rows > 0) {
							$row = mysqli_fetch_array($result);
							do {
								$checked_seats = "";
								if ($_GET["seats"]) {
									$checked_seats = "checked";	
								}
								echo '
								<li>
									<label>
										<input '.$checked_seats.' type="checkbox" name="seats" value="'.$row["seats"].'" id="checkseats_'.$row["id"].'">'.$row["seats"].'
									</label> 
								</li>
								';
							} while ($row = mysqli_fetch_array($result));
						}
					?>
				</ul>
			</div>
		</div>
		<div class="filter_parametrs_i" param="price">
			<div class="filter_parametrs_i_header">
				<span>Стоимость</span>
			</div>
			<div class="filter_parametrs_block_input_price">
				<ul>
					<li>От</li>
					<li><input type="text" class="form_input_price" id="min_price" name="min_price"></li>
					<li>до</li>
					<li><input type="text" class="form_input_price" id="max_price" name="max_price"></li>
				</ul>
				
				<div id="slider-range"></div>
			</div>
		</div>
		
		<input type="submit" name="submit">
	</form>
</div>