<?php

	function slumpa () {
	
		$theArray = array();
		
		for ($counter = 0; $counter < 100; $counter++) {
		
			$theArray[$counter] = mt_rand(1, 100);
			
		} 
		
		return $theArray;
		
		
		//EOL = end of line
		
	
	}
	
	function sortera($inVektor) {
		
		sort($inVektor);
		
	}
	
	function skrivut($inVektor) {
		
		if(is_array($inVektor)) {
			
			echo("<pre>");
			print_r($inVektor);
			echo("</pre>");
			
		}
		
	}
	
?>