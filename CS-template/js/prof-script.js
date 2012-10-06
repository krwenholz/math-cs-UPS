$(function() {
	//Find the list of professors
	var profs = $(".prof-list");
	//Clone profs to get a second collection
	var data = profs.clone();
	//Find appropriate profs when filter links are clicked
	$(".prof-filter a").click(function(){
		var clicked = $(this).attr("name");
		if(clicked == "all"){
			var filteredData = data.find("span");
		}
		else{
			var filteredData = data.find("span[data-type=" + clicked + "]");
		}
		//Call quicksand
		profs.quicksand(filteredData,{
			duration: 800
		});
	});
});