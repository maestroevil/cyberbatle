$(document).ready(function() {
	$(".left-panel-button").click(function(){
		var id = $(this).attr("id"); 
	  	getXHR("page/"+id+".php","resource/js/"+id+".js");
	  	setLocation('#book/' + id);
	});

	function setLocation(curLoc){
	  location.href = curLoc;
	  location.hash = curLoc;
	}
	
	function getXHR(url,url_script) {
	    var req = new XMLHttpRequest();
	    req.open('POST', url, true);
	    req.setRequestHeader("Content-Type", "text/plain;charset=UTF-8");
	    req.onreadystatechange = function () {
	        if (this.readyState == 4) {
	            if (this.status == 200 || this.status == 0) {
	               		$("#left-nav-menu__content").html(this.responseText);
	               		$("#nav-menu-left__script").remove();
	               		$("#sall-scripts-content").html("resource/js/content/home.js");

	               		
						try{
							setScript("resource/js/content/content.js","all-scripts-content");
	               			$("#all-scripts-content").remove();
	               			setScript(url_script,"nav-menu-left__script");	
						}
						catch(e){
							
						}
						
	                } else {
	                	alert("Eror:404");
	                };
	        	};           
	        }
	    req.send();
	};
	$(".left-panel-active-button").click(function(){
		var id = $(this).attr("id"); 
	  	getXHRRight("page/content/"+id+".php","resource/js/content/"+id+".js");
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
	               		setScript(url_script,"nav-menu-left__script-content");
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