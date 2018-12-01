$(document).ready(function() {
	$(".left-panel-button").click(function(){
		var id = $(this).attr("id"); 
	  	getXHR("page/"+id+".php","resource/js/"+id+".js");

	});

	function getXHR(url,url_script) {
	    var req = new XMLHttpRequest();
	    req.open('GET', url, true);
	    req.onreadystatechange = function () {
	        if (this.readyState == 4) {
	            if (this.status == 200 || this.status == 0) {
	               		$("#left-nav-menu__content").html(this.responseText);
	               		$("#nav-menu-left__script").remove();
	               		setScript(url_script);
	                } else {
	                	alert("Eror:404");
	                };
	        	};           
	        }
	    req.send();
	};
	function setScript(url){
		var s = document.createElement("script");
		s.type = "text/javascript";
		s.src = url;
		s.id = "nav-menu-left__script";
		$("body").append(s);
	}

});