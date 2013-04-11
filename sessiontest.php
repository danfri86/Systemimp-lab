<?php

	require_once("test/simpletest/autorun.php");
	require_once("test/simpletest/web_tester.php");
	
	class TestOfSessionSite extends WebTestCase {
		function testSessionSolution() {
			
			$this->get("http://localhost/Systemimp-lab/content.php"); // Testa sidan content.php och om allt �r ok.
			$this->assertResponse(200); // Kontrollera om allt gick bra.
			
			$this->assertLink("Sessioner"); // Finns det en l�nk som det st�r Sessioner p�?
			$this->clickLink("Sessioner"); // Klicka p� den. Nu �r man p� sidan Sessioner.php
			$this->assertResponse(200); // Kontrollera om allt gick bra.
			
			$this->assertFieldById("btnSlumpa"); // Kolla om det finns ett f�lt i formul�ret med det h�r id't. SKAPA ID'N P� L�NKARNA!!
			$this->assertFieldById("btnSortera");
			$this->assertCookie("PHPSESSID"); // Kolla om cookien PHPSESSID finns just nu. Om allt g�r bra n�r man klickar p� l�nken Sessioner ovan s� kommer cookien att finnas
			
			$this->clickSubmitById("btnSortera"); // Klicka p� sortera knappen
			$this->assertResponse(200); // Kontrollera om allt gick bra.
			$this->showSource(); // Dumpar ut k�llkoden f�r sidan den arbetar med s� att vi ser den
			
			$this->clickSubmitById("btnSlumpa"); // Klicka p� slumpa knappen
			$this->assertResponse(200); // Kontrollera om allt gick bra.
			$this->showSource(); // Dumpar ut k�llkoden f�r sidan den arbetar med s� att vi ser den
			
			$this->clickSubmitById("btnSortera"); // Klicka p� sortera knappen
			$this->assertResponse(200); // Kontrollera om allt gick bra.
			$this->showSource(); // Dumpar ut k�llkoden f�r sidan den arbetar med s� att vi ser den
			
			//showRequest och showHeader �r tv� saker vi borde kolla p�
		}
	}
	
?>