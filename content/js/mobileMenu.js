
	function openMenu(){
		$("#mobile-menu").css("right", "0");
		$("#page").css("margin-left", "-85%");
		$("#mobile-menu-background").fadeIn(100);
	}
	
	function closeMenu(){
		$("#mobile-menu").css("right", "-85%");
		$("#page").css("margin-left", "0");
		$("#mobile-menu-background").fadeOut(100);
	}