<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<title>Testi</title>
	
	<link href="style.css" rel="stylesheet" type="text/css"/>
	<link id="size-stylesheet" href="content/sizes/wide.css" rel="stylesheet" type="text/css"/>
	
	<script lang="javascript" src="content/plugins/jQuery.js"></script>
	<script lang="javascript" src="content/js/responsivity.js"></script>
	
	<!-- Custom scripts -->
	<script lang="javascript" src="content/js/mobileMenu.js"></script>
</head>
<body>
	<div onclick="closeMenu()" id="mobile-menu-background">
	</div>
	
	<div id="mobile-menu">
		<div class="mobile-menu-button">Home</div>
		<div class="mobile-menu-button">About</div>
	</div>

	<div id="page">
		<div id="header">
			<div id="header-container">
				<img id="mobile-menu-button" onmousedown="openMenu()" src="content/img/mobilemenu.png"/>
			</div>
		</div>
		
		<div id="top">
			<div id="top-container">
				<h1>Welcome.</h1>
			</div>
		</div>
		
		<div id="main">
		</div>
	</div>
</body>
</html>








