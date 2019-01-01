$(document).ready(function(){
	$('.carousel').carousel({
  		interval: 3000
	});

	$(".request").click(function(){
		alert();
		var data = $(this).attr("data"); 
		getXHRRight("resource/function/requests/"+data + ".php");
	});
	function getXHRRight(url) {
	    var req = new XMLHttpRequest();
	    req.open('POST', url, true);
	    req.setRequestHeader("Content-Type", "text/plain;charset=UTF-8");
	    req.onreadystatechange = function () {
	        if (this.readyState == 4) {
	            if (this.status == 200 || this.status == 0) {
	               		alert(this.responseText);
	               		if(this.responseText != "Ошибка")
	               			var c;
	               		else
	               			var f;
	               	
	                } else {
	                	alert("Eror:404");
	                };
	        	};           
	        }
	    req.send();
	};
});