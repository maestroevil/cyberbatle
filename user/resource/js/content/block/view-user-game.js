$(document).ready(function() {
	$("#bracket_but").click(function(){
		$("#bracket").show();
		$("#tour_tab").hide();
	});
	$("#tour_table_but").click(function(){
		$("#bracket").hide();
		$("#tour_tab").show();
	});
	
});