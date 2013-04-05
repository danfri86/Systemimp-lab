<?php

	/*
	//Skapar en textfil på servern. Skickar en sessionskaka tillbaka tillsammans med sessions.php
	session_start();
	
	//Stoppar in kod=ISGB11 i sessionskakan
	$_SESSION["kod"]="ISGB11";
	
	//Skriver ut innehållet i sessionen
	echo($_SESSION["kod"];
	*/
	
	ob_start();
	
	session_start();
	session_regenerate_id(true);
	
	echo("session.php");
	
	include("incl/myArray.php");
	
	$oMyArray = new MyArray();
	
	if(isset($_SESSION["minSession"])) {
		$oMyArray->setArray($_SESSION["minSession"]);
	}

	if(isset($_POST["btnAction"])) { // Kontrollera om något kommer in från formuläret. Om något tryckt på knappen btnAction
		
		if($_POST["btnAction"] == "Slumpa") { // Om någon tryckt på motsvarande knapp går vi in här
			$oMyArray->randomArray();
			echo($oMyArray->array2XHTMLTable());
		}
		
		if($_POST["btnAction"] == "Sortera") { // Om någon tryckt på motsvarande knapp går vi in här
			$oMyArray->setArray($_SESSION["minSession"]);
			$oMyArray->sortArray();
			echo($oMyArray->array2XHTMLTable());
		}
	}
	
	$_SESSION["minSession"] = $oMyArray->getArray();
	
?>

<form id="buttonlink" method="post" action="content.php?p=s">
	<div>
		<input type="submit" name="btnAction" value="Slumpa" id="btnSlumpa" />
		<input type="submit" name="btnAction" value="Sortera" id="btnSortera" />
	</div>
</form>