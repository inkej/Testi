
	$(window).on("load resize", function(){
		if($(window).width() < 600){
		$("#size-stylesheet").attr("href", "content/sizes/mobile.css");
		}
			else if($(window).width() < 1200){
			$("#size-stylesheet").attr("href", "content/sizes/medium.css");
			}
			
			else{
			$("#size-stylesheet").attr("href", "content/sizes/wide.css");
			}
	});