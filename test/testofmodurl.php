<?php

	require_once("simpletest/autorun.php");
	require_once("simpletest/web_tester.php");
	
	class TestOfHiddenSite extends WebTestCase {
		function testHiddenSolution() {
		
			$this->get("http://localhost/Systemimp-lab/content.php"); // Testa sidan content.php och om allt är ok.
			$this->assertTrue($this->get("http://localhost/Systemimp-lab/content.php"));
			
			$this->assertLink("Modifierad URL"); // Finns det en länk som det står Modifierad URL på?
			$this->clickLink("Modifierad URL"); // Klicka på den. Nu är man på sidan modurl.php
			
			$this->assertLink("Slumpa"); // Kolla om knappen finns
			$this->assertLink("Sortera"); // Kolla om knappen finns
			
			$this->clickLink("Sortera"); // Klicka på sortera knappen
			$this->assertTrue($this->clickLink("Sortera"));
			$this->clickLink("Slumpa"); // Klicka på slumpa knappen
			$this->assertTrue($this->clickLink("Slumpa"));
			$this->clickLink("Sortera"); // Klicka på sortera knappen
			$this->assertTrue($this->clickLink("Sortera"));
			
			$this->showRequest();
			$this->showHeaders();
			$this->showSource();
		
		}
	}
	
?>