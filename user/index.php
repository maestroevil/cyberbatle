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
				<i class="fas fa-home icon-home"></i>
			</a>
			
		</div>
		<div class="top-menu-right">
			<i class="fas fa-money-bill icon-left-menu"></i>
			<a href="">
				<img src="resource/img/avatar.jpg" width="40" height="40" alt="avatar" class="rounded-circle">
			</a>
			<i class="fas fa-arrow-down icon-left-menu"></i>

			
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
		<div class="left-nav-menu" id='left-nav-menu'>
			<div class="left-nav-menu__title">
				<h6>Играть</h6>
				<hr>
			</div>
			<div id='left-nav-menu__content'>
				
			</div>
		</div>
		<div class="content"></div>
	</div>
			
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="resource/js/left-menu-nav.js"></script>
	<script id='nav-menu-left__script' type="text/javascript" src="resource/js/play.js"></script>
</body>
</html>
<?
?>