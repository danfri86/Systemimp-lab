<?php

	function slumpaskrivut () {
	
		for ($counter = 1; $counter <= 10; $counter++) {
		
			echo(mt_rand(1, 1000) . " ");
			
		} 
		
		echo("<br />" . PHP_EOL);
		
		//EOL = end of line
	
	}
	
?>