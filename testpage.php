<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<button onclick="Red()">Red</button>
	<button onclick="Green()">Green</button>
	<button onclick="Blue()">Blue</button>
	<script type="text/javascript">
		function Red(){
			document.body.style.backgroundColor = "Red";		
		}
		function Green(){
			document.body.style.backgroundColor = "Green";		
		}
		function Blue(){
			document.body.style.backgroundColor = "Blue";		
		}
	</script>
	<br>
	<hr>
	<h1>
	     <pre>
		<?php
		print `/usr/sbin/ifconfig`;
		?>
	     </pre>
        </h1>
</body>
</html>
