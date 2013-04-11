<?php

	require_once("simpletest/autorun.php");
	require_once("simpletest/web_tester.php");
	
	class TestOfHiddenSite extends WebTestCase {
		function testHiddenSolution() {
		
			$this->get("http://localhost/Systemimp-lab/content.php"); // Testa sidan content.php och om allt är ok.
			$this->assertTrue($this->get("http://localhost/Systemimp-lab/content.php"));
			
			$this->assertLink("Kakor"); // Finns det en länk som det står Gömda fält på?
			$this->clickLink("Kakor"); // Klicka på den. Nu är man på sidan hidden.php
			$this->assertCookie("kaka");
			
			$this->assertFieldById("btnSortera"); // Kolla om knappen finns
			$this->assertFieldById("btnSlumpa"); // Kolla om knappen finns
			
			$this->clickSubmitById("btnSortera"); // Klicka på sortera knappen
			$this->assertTrue($this->clickSubmitById("btnSortera"));
			$this->assertCookie("kaka");
			
			$this->clickSubmitById("btnSlumpa"); // Klicka på slumpa knappen
			$this->assertTrue($this->clickSubmitById("btnSlumpa"));
			$this->assertCookie("kaka");
			
			$this->clickSubmitById("btnSortera"); // Klicka på sortera knappen
			$this->assertTrue($this->clickSubmitById("btnSortera"));
			$this->assertCookie("kaka");
			
			$this->showRequest();
			$this->showHeaders();
			$this->showSource();
		
		}
	}
	
?>