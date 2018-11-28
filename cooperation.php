<?
	include "resource/function/function.php";
	$url = get_language("all");
	include "$url";
	$content = $cooperation;
	view_content_on_page($content);
?>