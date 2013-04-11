<?php

	require_once("simpletest/autorun.php");
	require_once("simpletest/web_tester.php");
	
	class TestOfHiddenSite extends WebTestCase {
		function testHiddenSolution() {
		
			$this->get("http://localhost/Systemimp-lab/content.php"); // Testa sidan content.php och om allt är ok.
			$this->assertTrue($this->get("http://localhost/Systemimp-lab/content.php"));
			
			$this->assertLink("Sessioner"); // Finns det en länk som det står Gömda fält på?
			$this->clickLink("Sessioner"); // Klicka på den. Nu är man på sidan hidden.php
			$this->assertCookie("PHPSESSID");
			
			$this->assertFieldById("btnSortera"); // Kolla om knappen finns
			$this->assertFieldById("btnSlumpa"); // Kolla om knappen finns
			
			$this->clickSubmitById("btnSortera"); // Klicka på sortera knappen
			$this->assertTrue($this->clickSubmitById("btnSortera"));
			$this->assertCookie("PHPSESSID");
			
			$this->clickSubmitById("btnSlumpa"); // Klicka på slumpa knappen
			$this->assertTrue($this->clickSubmitById("btnSlumpa"));
			$this->assertCookie("PHPSESSID");
			
			$this->clickSubmitById("btnSortera"); // Klicka på sortera knappen
			$this->assertTrue($this->clickSubmitById("btnSortera"));
			$this->assertCookie("PHPSESSID");
			
			$this->showRequest();
			$this->showHeaders();
			$this->showSource();
		
		}
	}
	
?>