<!DOCTYPE html>
<html>
<head>
	<title>CyberBattle</title>
	<link rel="stylesheet" type="text/css" href="resource/css/main.css">
	<!-- Meta -->
  <meta charset="utf-8">
  <!-- Bootsrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <!-- Icons -->
  <!-- https://fontawesome.com -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
  <!-- / -->
</head>
<body>
	<div class="top-menu">
		<div class="top-menu-left">
			<a class="home">
				<i class="fas fa-home icon-home left-panel-active-button" id='home'></i>
			</a>			
		</div>
		<div class="top-menu-right">			
			<i class="fab fa-cuttlefish icon" ></i>
			<span>50</span>
			<i class="fas fa-crown icon"></i>
			<span>50</span>
			
			<a href="">
				<img src="resource/img/avatar.jpg" alt="avatar" class="">
			</a>
		</div>
	</div>
	<div class="left"> 
		<div class="left-list">
			<a><i class="fas fa-play icon left-panel-button" id='play'></i></a>
			<a><i class="fas fa-user-friends icon left-panel-button" id='friends'></i></a>
			<a><i class="fas fa-trophy icon left-panel-button" id='trophy'></i>	</a>
			<a>
				<i class="fas fa-users icon left-panel-button" id='team'></i>
				<hr style="border:1px solid white;margin-top: 0px;">
			</a>
			<!-- <a href=""><i class="fas fa-briefcase icon" id=''></i></a> -->
			<a><i class="fas fa-shopping-cart icon left-panel-button" id='shop'></i></a>
			<a><i class="fas fa-star icon left-panel-button" id='subscription'></i></a>
			<a><i class="fas fa-question icon left-panel-button" id = 'question'></i></a>
			<a><i class="fas fa-headset icon left-panel-button" id='support'></i></a>
		</div>
		<div class="left-nav-menu" id='left-nav-menu__content'>
			<div class="play-block">
				<div class="left-nav-menu__title">
					<h6>Играть</h6>
					<hr>
				</div>
				<button class="but2 left-panel-active-button" id='user-game'>Пользовательские игры</button>	
				<button class="but2 left-panel-active-button" id='user-tour'>Пользовательские турниры</button>	
				<button class="but2">Создать комнату</button>	
				<button class="but2">Создать турнир</button>	
				<div class="block-panel">
					<h6 class="title-panel">Комнаты <hr></h6>	
					<div class="game-item">
						<img src="resource/img/clashroyale.png">
						<span class="game-title">ClashRoyale 5000$</span>	
					</div>
					<div class="game-item">
						<img src="resource/img/pubgmobile.jpg">
						<span class="game-title">PubgMobile Zone</span>	
					</div>
					<div class="game-item">
						<img src="resource/img/hs.png">
						<span class="game-title">Hearstone Zone</span>	
					</div>
				</div>
				<div class="block-panel">
					<h6 class="title-panel">Турниры<hr></h6>	
					<p class="text-center" >Список пуст </p>
				</div>
			</div>
		</div>
		<div class="content" id='right-panel__content'>
			<div class="news">
				<div class="list-news">
					<div class="block-news">
						<img src="resource/img/avatar.jpg">
						<div class="cont">
							<p>26.11.2018 Новокаховский Политехнический Колледж от лица Виткова Виталия Владимировича директора данного учреждения, дал согласия на проведения турниров на територии колледжа. </p>
						</div>
					</div>
					<div class="block-news">
						<img src="resource/img/avatar.jpg">
						<div class="cont">
							<p>--.--.2019 Одесский Политехнический Университет от лица Вычужанина Владимира Викторовича зав. кафедры  126 специализации, дал согласия на проведения турниров на територии корпуса X. </p>
						</div>
					</div>
					<div class="block-news">
						<img src="resource/img/tour.jpg">
						<div class="cont">
							<p>Организация первого тунира не територии НКПК. Результаты и медим можно просмотреть подробней в соц сетях. 
								<a href="ingfs">подробнее </a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- Left-menu -->
	<script type="text/javascript" src="resource/js/left-menu-nav.js"></script>
	<script id='nav-menu-left__script' type="text/javascript" src="resource/js/play.js"></script>
	<!--Content  -->
	<script id='nav-menu-left__script-content' type="text/javascript" src="resource/js/content/home.js"></script>
	<script id='all-scripts-content' type="text/javascript" src=""></script>
	<!-- Block -->
	<script id='nav-menu-left__script-block' type="text/javascript" ></script>
	<script id='all-scripts-block' type="text/javascript" src=""></script>
</body>
</html>
<?
?>