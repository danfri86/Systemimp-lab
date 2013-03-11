<?php 
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	ob_start();
	header("Content-Type: application/xhtml+xml; charset=utf-8");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">
<head>
		<title></title>
		
		<style type="text/css">
		div {
			margin: 100px auto;
			width: 420px;
			text-align: center;
			max-width: 100%;
			font-size: 1.2em;
		}
		</style>
	</head>
	<body>
		<div>
		<?php
		
			include ("slumpa.php");
			
			$myArray = slumpa();
			
			sortera(&$myArray);
			
			skrivut($myArray);

		
			
			

		
		?>
		</div>
	</body>
</html>
