<header>
	<div class="header-navbar">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Brand</a>
			    </div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="#">Главная<span class="sr-only">(current)</span></a></li>
			        <li><a href="#">Оплата и доставка</a></li>
			        <li><a href="#">Контакты</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Каталог товаров <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			        </li>
			      </ul>
			      <form class="navbar-form navbar-left">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Поиск</button>
			      </form>
			      <ul class="nav navbar-nav navbar-right">
			        <li>
		        		<button type="button" class="btn navbar-btn btn-default cart">
						  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
						  <a href="#">Корзина <span class="badge">2</span></a>
						</button>
			        </li>
					<li>
						<button type="button" class="btn navbar-btn btn-default" data-toggle="modal" data-target="#login_account">
							<a href="#">Войти в личный кабинет</a>
						</button>
					</li>
			      </ul>
					<ul class="nav navbar-nav navbar-contact-info navbar-center">
						<li><a href="#">(050) 912 70 78</a></li>
						<li><a href="#">График работы: пн.-сб. 9:00 - 18:00</a></li>
						<li>
							<ul class="social-img nav navbar-nav">
								<li><a href="#">Мы в соцсетях</a></li>
								<li><a href="#"><img src="img/icon_Facebook.png" alt=""></a></li>
								<li><a href="#"><img src="img/icon_Google.png" alt=""></a></li>
								<li><a href="#"><img src="img/icon_Intsagram.png" alt=""></a></li>
								<li><a href="#"><img src="img/icon_Skype.png" alt=""></a></li>
								<li><a href="#"><img src="img/icon_Twitter.png" alt=""></a></li>
								<li><a href="#"><img src="img/icon_YouTube.png" alt=""></a></li>
							</ul>
						</li>
						<li><a href="#">Блог</a></li>
						<li><a href="#">Регистрация</a></li>
					</ul>
			    </div><!-- /.navbar-collapse -->
			</div><!-- /.container-->
		</nav>	
	</div>
	
	<div class="modal fade" id="login_account" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Вход в личный кабинет</h4>
	      </div>
	      <div class="modal-body">
	        
			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Адрес электронной почты</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Пароль</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <p class="help-block"><a href="#">Напомнить пароль</a></p>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Запомнить меня
			    </label>
			  </div>
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
	        <button type="button" class="btn btn-primary">Войти</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

</header>