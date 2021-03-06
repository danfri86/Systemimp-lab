<?php

	class MyArray {
	
		private $intArray;
		
			public function __construct() {
				$this->intArray = array_fill(0, 100, 0);
			}
			
			public function __destruct() {
				unset($this->intArray);
			}
			
			public function dumpMyArray() {
				echo("<pre>");
				print_r($this->intArray);
				echo("</pre>");
			}
			
			public function randomArray() {
				for($counter = 0; $counter < 100; $counter++) {
					$this->intArray[$counter] = mt_rand(1, 100);	
				}
			}
			
			public function sortArray() {
				sort($this->intArray);
			}
			
			public function array2String() {
				return implode(", ", $this->intArray);
			}
			
			public function string2Array($inArray) {
				$this->intArray = explode(", ", $inArray); 
			}
			
			public function setArray($inArray) {
				$this->intArray = $inArray;
			}
		
			public function getArray() {
				return $this->intArray;
			}
			
			public function array2XHTMLTable() {
				$strOutput = "<ul id=\"table\">" . PHP_EOL;
				$counter = 0;
				
				for ($outerCounter = 1; $outerCounter <= 10; $outerCounter++) {
					$strOutput .= "<li><ul>" . PHP_EOL;
					
					for ($innerCounter = 1; $innerCounter <= 10; $innerCounter++) {
						$strOutput .= "<li> <img src=\"image/image";
						$strOutput .= $this->intArray[$counter];
						$strOutput .= ".png\" alt=\"" . $this->intArray[$counter];
						$strOutput .= "\" /></li>" . PHP_EOL;
						$counter++;
						
					}
					
					$strOutput .= "</ul></li>" . PHP_EOL;	
			
				}
				
				$strOutput .= "</ul>"; 
				
				return $strOutput;
				
			}
	}

		

?>