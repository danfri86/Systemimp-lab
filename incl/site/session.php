<?php

	/*
	//Skapar en textfil på servern. Skickar en sessionskaka tillbaka tillsammans med sessions.php
	session_start();
	
	//Stoppar in kod=ISGB11 i sessionskakan
	$_SESSION["kod"]="ISGB11";
	
	//Skriver ut innehållet i kakan
	echo($_SESSION["kod"];
	*/
	
	session_start();
	session_regenerate_id(true);
	
	echo("session.php");
	
	include("incl/myArray.php");
	
	$oMyArray = new MyArray();

	if(isset($_POST["btnAction"])) { // Kontrollera om något kommer in från formuläret. Om något tryckt på knappen btnAction
		
		if($_POST["btnAction"] == "Slumpa") { // Om någon tryckt på motsvarande knapp går vi in här
			$oMyArray->randomArray();
			echo($oMyArray->array2XHTMLTable());
			$oMyArray->setArray($_SESSION["session"]);
		}
		
		if($_POST["btnAction"] == "Sortera") { // Om någon tryckt på motsvarande knapp går vi in här
			$_SESSION["session"] = $oMyArray->getArray();
			$oMyArray->sortArray();
			echo($oMyArray->array2XHTMLTable());
		}
	}
	
?>

<form id="buttonlink" method="post" action="content.php?p=s">
	<div>
		<input type="submit" name="btnAction" value="Slumpa" />
		<input type="submit" name="btnAction" value="Sortera" />
	</div>
</form>