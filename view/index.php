<!DOCTYPE html>
<html>
	<head>
		<title>Dock</title>
		<link rel="stylesheet" type="text/css" href="./bar.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script>
			$( document ).ready(function() {
				
			});
		</script>
	</head>
	<body>
		<div id="retractile-bar">
			<div id="visible-handler">
				<div id="datetime-right">10:36</div>
			</div>
		</div>
		<div id="desktop-icons">
			<ul>
				<li><img src="./icons/folder.png" draggable="false" /><br /><span>Files</span></li>
				<li><img src="./icons/chrome.png" draggable="false" /><br /><span>Chrome</span></li>
				<li><img src="./icons/facebook.png" draggable="false" /><br /><span>Facebook</span></li>
			</ul>
		</div>
		<div id="application-exec">
			<div class="header-application-handler">
				<div class="header-controllers">
					<div class="close-button"></div>
					<div class="minimize-button"></div>
				</div>
				<div class="application-title">
					My Application
				</div>
				<div class="application-icon">
					
				</div>
			</div>
		</div>
		<div id="dock" align="center">
			<a class="tooltips"><img src="./icons/folder.png" draggable="false" /><span>Files</span></a>
			<a class="tooltips"><img src="./icons/chrome.png" draggable="false" class="open-application" /><span>Google Chrome</span></a>
			<a class="tooltips"><img src="./icons/firefox.png" draggable="false" /><span>Firefox</span></a>
			<a class="tooltips"><img src="./icons/facebook.png" draggable="false" class="open-application" /><span>Facebook</span></a>
			<a class="tooltips"><img src="./icons/quicktime.png" draggable="false" /><span>Quicktime</span></a>
			<a class="tooltips"><img src="./icons/photo.png" draggable="false" /><span>Photo</span></a>
			<a class="tooltips"><img src="./icons/word.png" draggable="false" /><span>Word</span></a>
			<a class="tooltips"><img src="./icons/excel.png" draggable="false" /><span>Excel</span></a>
			<a class="tooltips"><img src="./icons/search.png" draggable="false" /><span>Search</span></a>
		</div>
	</body>
</html>