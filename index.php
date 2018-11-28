<?
	include "resource/function/function.php";
	$url = get_language("all");
	include "$url";	
	$slider_main["slide1"]["content"] = 
	"
		<div class='slider-main'>
			".$index_slide_1."
			<img class = 'gif' src='resource/gif/almaz.gif'><br>
			<a class='button2 slide-link' href='/'>".$index_slide_1_button ."</a>
		</div>
	";
	$slider_main["slide2"]["content"] = 
	"
		<div class='slider-main'>
			".$index_slide_2."
			<img class = 'gif' src='resource/gif/minecraft1.gif'><br>
			<a class='button2 slide-link' href='/'>".$index_slide_2_button." </a>
		</div>
	";
	$content .= carousel_slider($slider_main);
	//Section-1
	$content .="
		<section class='section-1 text-center'>
			<h3>".$index_content_1_1 ." </h3>
			<p>".$index_content_1_2."</p>
			<div class='content'>
				<div class='block'><img src = 'resource/img/cs-go-icon.png'></div>
				<div class='block'><img src = 'resource/img/minecraft-icon.png'></div>
				<div class='block'><img src = 'resource/img/dota-icon.png'></div>
			</div>
		</section>
	";
	//Section-2
	$content .= "
		<section class='section-2'>
			<div class = 'container-fluid'>
				<div class='row'>
					<div class='col-md-12 col-sm-12 col-xs-12 text-center'>
							<img  src='resource/img/prize.png'>
					</div>
					<div class='col-md-6 col-sm-12 col-xs-12 text-center'>
						<h3>".$index_content_2_1." </h3>
						<p >".$index_content_2_2."</p>
					</div>
				</div>
			</div>
		</section>
	";
	$content .="
		<section class='section-3'>
			<div class='container-fluid'>
				<div class='row'>
					<div class='col-sm-12 col-xs-12 col-md-6 col-lg-6 text-center'>
						<h3> ".$index_content_3_1." </h3>
						<p class='text-center'>".$index_content_3_2."  <br> 
						</p>
						<a class='button2' href='' >".$index_content_3_3."  </a> 
					</div>
					<div class='col-sm-12 col-xs-12 col-md-6 col-lg-6 text-center '>
						<img class='gif-400'  src='resource/gif/4tcm.gif'>
					</div>
				</div>
			</div>
		</section>
	";
	$content .="
		<section class='section-4'>
			<div class='container-fluid'>
				<div class='row'>
					<div class='col-sm-12 col-xs-12 col-md-6 col-lg-6 text-center '>
						<img class='gif-400'  src='resource/gif/1BAb.gif'>
					</div>
					<div class='col-sm-12 col-xs-12 col-md-6 col-lg-6 text-center '>
						<h3> $index_content_4_1 </h3>
						<p> $index_content_4_2 </p>
					</div>
				</div>
			</div>
		</section>
	";
	$content .="
		<section class='section-5'>
			<div class='container-fluid'>
				<div class='row'>
					<div class='col-sm-12 col-xs-12 col-md-6 col-lg-6 text-center '>
					<h3> $index_content_5_1  </h3>
					<p>  $index_content_5_2 </p>
					</div>
					<div class='col-sm-12 col-xs-12 col-md-6 col-lg-6 text-center '>
						<img class='w-300' src='resource/img/cooperation.png'>
					</div>
				</div>
			</div>
		</section>
	";
	$content .="
		<section class='section-6'>
			<div class='container-fluid'>
				<h3 class='text-center'> $index_price</h3>
				<div class='row'>
					<div class='col-sm-12 col-xs-12 col-md-4 col-lg-4  block-price text-center'>
						$index_price_1
					</div>
					<div class='col-sm-12 col-xs-12 col-md-4 col-lg-4 text-center block-price'>
						$index_price_2
					</div>
					<div class='col-sm-12 col-xs-12 col-md-4 col-lg-4 text-center block-price' >
						$index_price_3
					</div>
				</div>
			</div>
		</section>
	";
	$content .="
		<section class='section-7 text-center'>
			<h3>$index_content_6</h3>
			<p> </p>

			<p>$index_content_6_1
			</p>
		</section>
	";
	view_content_on_page($content);
?>