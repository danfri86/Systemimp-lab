<?php

	require_once("test/simpletest/autorun.php");
	require_once("test/simpletest/web_tester.php");
	
	class TestOfSessionSite extends WebTestCase {
		function testSessionSolution() {
			
			$this->get("http://localhost/Systemimp-lab/content.php"); // Testa sidan content.php och om allt är ok.
			$this->assertResponse(200); // Kontrollera om allt gick bra.
			
			$this->assertLink("Sessioner"); // Finns det en länk som det står Sessioner på?
			$this->clickLink("Sessioner"); // Klicka på den. Nu är man på sidan Sessioner.php
			$this->assertResponse(200); // Kontrollera om allt gick bra.
			
			$this->assertFieldById("btnSlumpa"); // Kolla om det finns ett fält i formuläret med det här id't. SKAPA ID'N PÅ LÄNKARNA!!
			$this->assertFieldById("btnSortera");
			$this->assertCookie("PHPSESSID"); // Kolla om cookien PHPSESSID finns just nu. Om allt går bra när man klickar på länken Sessioner ovan så kommer cookien att finnas
			
			$this->clickSubmitById("btnSortera"); // Klicka på sortera knappen
			$this->assertResponse(200); // Kontrollera om allt gick bra.
			$this->showSource(); // Dumpar ut källkoden för sidan den arbetar med så att vi ser den
			
			$this->clickSubmitById("btnSlumpa"); // Klicka på slumpa knappen
			$this->assertResponse(200); // Kontrollera om allt gick bra.
			$this->showSource(); // Dumpar ut källkoden för sidan den arbetar med så att vi ser den
			
			$this->clickSubmitById("btnSortera"); // Klicka på sortera knappen
			$this->assertResponse(200); // Kontrollera om allt gick bra.
			$this->showSource(); // Dumpar ut källkoden för sidan den arbetar med så att vi ser den
			
			//showRequest och showHeader är två saker vi borde kolla på
		}
	}
	
?>