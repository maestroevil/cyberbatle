$(document).ready(function() {
	function setLocation(curLoc){
	  location.href = curLoc;
	  location.hash = curLoc;
	}
	
	$(".left-panel-active-button").click(function(){
		var id = $(this).attr("page"); 
	  	getXHRRight("page/content/block/"+id+".php","resource/js/content/block/"+id+".js");
	});
	function getXHRRight(url,url_script) {
	    var req = new XMLHttpRequest();
	    req.open('POST', url, true);
	    req.setRequestHeader("Content-Type", "text/plain;charset=UTF-8");
	    req.onreadystatechange = function () {
	        if (this.readyState == 4) {
	            if (this.status == 200 || this.status == 0) {
	               		$("#right-panel__content").html(this.responseText);
	               		$("#nav-menu-left__script-content").remove();
	               		setScript(url_script,"nav-menu-left__script-block");

	               		$("#nav-menu-left__script-content").remove();
	               		setScript("resource/js/content/block/block.js","all-scripts-block");
	                } else {
	                	alert("Eror:404");
	                };
	        	};           
	        }
	    req.send();
	};
	function setScript(url,id){
		var s = document.createElement("script");
		s.type = "text/javascript";
		s.src = url;
		s.id = id;
		$("body").append(s);
	}
});