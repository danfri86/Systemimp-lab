<?php include("incl/header.php") ?>
		                                
			<?php include("incl/nav.php") ?>
					
			<div id="contentsection">
				
				<?php
					$filetoinclude = "";
					
					if (isset($_GET["p"])) {
				   		echo($_GET["p"]. " ");
				   		
				   		if ($_GET["p"] == "h") {
					   		$filetoinclude = "hidden.php";
					   		$method = "hidden";
				   		}
				   		
				   		if ($_GET["p"] == "m") {
					   		$filetoinclude = "modurl.php";
					   		$method = "modurl";
				   		}
				   		
				   		if ($_GET["p"] == "c") {
					   		$filetoinclude = "cookie.php";
					   		$method = "cookie";
				   		}
				   		
				   		if ($_GET["p"] == "s") {
					   		$filetoinclude = "session.php";
					   		$method = "session";
				   		}
				   	}
				   	else {
				   		 $filetoinclude = "default.php";
				   		 $method = "ingen metod vald ännu!";
				   	}
				   	
				   	include("incl/myArray.php");
				   	
				   	include("incl/site/". $filetoinclude);
				   			
				?>
				
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