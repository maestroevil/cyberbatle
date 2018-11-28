<?
	//Подключаем массивы
	include "resource/function/array.php";
	// Отображение контента на странице
	function view_content_on_page($content)
	{
    	include 'template/link.html';	
    	include 'template/menu.php';
    	echo $content;
    	include 'template/footer.php';
    	include 'template/scripts.html';	
	}
	function get_language($length){
		if($_GET["lang"]=="ru" || $_GET["lang"]=="en" )
			$language = $_GET['lang'];
		if(!$_GET["lang"])
			$language = "en";
		if($length == "all")
			$url = "resource/language/".$language.".php";
		else
			$url = $language;
		return $url;
	}
	//Создаем слайдер
	function carousel_slider($array_slider){
		$content .= "
		<div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
  				<div class='carousel-inner'>";
		foreach ($array_slider as $key => $value) {
				$content .="
				<div class='carousel-item ".($key == "slide1" ? "active" : "")."'>
		  			<div class='slide-content  w-100'>
		 				$value[content] 				
		  			</div>
		  			".($value['url'] != '' ? "<img class='d-block w-100' src='resource/sliders/$value[url]' alt='Second slide'>" : '')."
				</div>";
		}
		$content .="
		  	</div>	
	  		<a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
	    		<span class='carousel-control-prev-icon' aria-hidden='true'></span>
	    		<span class='sr-only'>Previous</span>
	  		</a>
	  		<a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
	    		<span class='carousel-control-next-icon' aria-hidden='true'></span>
	    		<span class='sr-only'>Next</span>
	  		</a>
		</div>
		";
  		return $content;
	}

?>