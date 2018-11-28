<?
	include "/resource/function/function.php";
	$url = get_language("all");
	include "$url";
	$content .= "
	<div class='contacts'>
		$contacts1
		<div class='container=-fluid'>
			<div class='row'>
				<div class='col-sm-12 col-xs-12 col-md-6 col-lg-6'>
				<br>
					$contacts
				</div>
				<div class='col-sm-12 col-xs-12 col-md-6 col-lg-6'>
				<br>
					<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2748.3805305037213!2d30.748589115418554!3d46.460970079125254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c631628f04ac87%3A0x763df5ec1b5b99fd!2z0J7QtNC10YHRgdC60LjQuSDQndCw0YbQuNC-0L3QsNC70YzQvdGL0Lkg0J_QvtC70LjRgtC10YXQvdC40YfQtdGB0LrQuNC5INCj0L3QuNCy0LXRgNGB0LjRgtC10YI!5e0!3m2!1sru!2sua!4v1541105193115' width='400px' height='200px' frameborder='0' allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	";
	view_content_on_page($content);
?>