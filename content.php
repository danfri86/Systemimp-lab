<?php include("incl/header.php") ?>
	
<body>
	<div id="sitewrapper" class="clearfix">
	
		<div id="siteheader">
			<h1>Tillståndslös miljö, PHP och Array</h1>			
		</div><!-- /#siteheader -->
		
		
		<div id="contentwrapper">
		                                
			<?php include("incl/nav.php") ?>
					
			<div id="contentsection">
			
				<?php include("incl/site/cookie.php") ?>
				<?php include("incl/site/modurl.php") ?>
				<?php include("incl/site/hidden.php") ?>
				<?php include("incl/site/session.php") ?>
				
				<?php
					$p = "p";
				
					if (isset($_GET["p"])) {
				   		echo($_GET["p"]);
				   		
				   		if ($p == "h") {
					   		 $filetoinclude = "hidden.php";
					   		 $method = "hidden";
				   		}
				   		
				   		if ($p == "m") {
					   		 $filetoinclude = "modurl.php";
					   		 $method = "modurl";
				   		}
				   		
				   		if ($p == "c") {
					   		 $filetoinclude = "cookie.php";
					   		 $method = "cookie";
				   		}
				   		
				   		if ($p == "s") {
					   		 $filetoinclude = "session.php";
					   		 $method = "session";
				   		}
				   	}
				   	else {
				   		 $filetoinclude = "default.php";
				   		 $method = "ingen metod vald ännu!";
				   	}
				?>
				
				<?php include("incl/myArray.php") ?>
				<?php include("incl/site/\"". $filetoinclude) ?>
			
				<!--
				<ul id="table">
					<li>
						<ul>
							<li><img src="image/image1.png" alt="Bild" /></li>
							<li><img src="image/image2.png" alt="Bild" /></li>
							<li><img src="image/image3.png" alt="Bild" /></li>
							<li><img src="image/image4.png" alt="Bild" /></li>
							<li><img src="image/image5.png" alt="Bild" /></li>
							<li><img src="image/image6.png" alt="Bild" /></li>
							<li><img src="image/image7.png" alt="Bild" /></li>
							<li><img src="image/image8.png" alt="Bild" /></li>
							<li><img src="image/image9.png" alt="Bild" /></li>
							<li><img src="image/image10.png" alt="Bild" /></li>
						</ul>
					</li>
				</ul>
				-->					
								
			</div><!-- /#contentsection -->
		
		</div><!-- /#contentwrapper -->
		
		<?php $method = "Ingen vald ännu!";	?>
<?php include("incl/footer.php") ?>