
	$(window).on("load resize", function(){
		if($(window).width() < 600){
		$("#size-stylesheet").attr("href", "content/sizes/mobile.css");
		}
			else{
			$("#size-stylesheet").attr("href", "content/sizes/wide.css");
			}
	});