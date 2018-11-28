<?
	include "resource/function/function.php";
	$url = get_language("all");
  	include "$url"; 
	$content= $about_project;
	view_content_on_page($content);
?>
