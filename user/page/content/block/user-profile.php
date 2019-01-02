<?session_start();	 ?>
<div class="view-user-game">
	<div class="title">
		<h2><? echo $_SESSION['nickname_user']?> </h2>
		<img src="resource/img/pubgmobile.jpg">
	</div>
	<div class="info">
		<span>
			<i class="fas fa-user" ></i> id	<? echo $_SESSION['id_user']?> 
		</span>
		<BR>
		<span>
			<i class="far fa-calendar-alt"></i> Дата регистрации - 08.12.2018
		</span>
		<BR>
		<span>
			<i class="fab fa-cuttlefish icon money"></i>  0
		</span>
		<span>
			<i class="fas fa-crown icon money"></i> 25
		</span>
	</div>
	<div >	
		<div class="left-panel">
			<h3>Изменение пароля </h3>
			<BR>
			<h6>Старый пароль </h6>	
			<input type="password" name="">
			<BR><BR>
			<h6>Новый пароль </h6>	
			<input type="password" name="">
			<br><br>
			<input type="submit" value="">
		</div>
		<div class="right-panel">
			<p><? echo $_SESSION['name_user']." ".$_SESSION['surname_user']." ".$_SESSION['patronymic_user']?> </p>
			<p>Номер телефона: <? echo $_SESSION['telephone_user'] ?> </p>
			<p>E-mail: <? echo $_SESSION['e-mail_user'] ?> </p>
			<p>Город <? echo $_SESSION['e-mail_user'] ?> </p>			
		</div>
	</div>
</div>