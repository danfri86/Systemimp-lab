<?php
	
	echo("cookie.php");
	
	include("incl/myArray.php");
	
	$oMyArray = new MyArray();
	
	// Ta bort kakan när vektorn är sorterad
	// setcookie("kaka", "", time() - 3600);
	
	if(isset($_COOKIE["kaka"])) {
		$oMyArray->string2array($_COOKIE["kaka"]);
	}
	else {
		setcookie("kaka", $oMyArray->array2String());
	}
	
	if(isset($_POST["btnAction"])) { // Kontrollera om något kommer in från formuläret. Om något tryckt på knappen btnAction
		
		if($_POST["btnAction"] == "Slumpa") { // Om någon tryckt på motsvarande knapp går vi in här
			$oMyArray->randomArray();
			echo($oMyArray->array2XHTMLTable());
			setcookie("kaka", $oMyArray->array2String());
		}
		
		if($_POST["btnAction"] == "Sortera") { // Om någon tryckt på motsvarande knapp går vi in här
			$oMyArray->string2array($_COOKIE["kaka"]);
			$oMyArray->sortArray();
			echo($oMyArray->array2XHTMLTable());
		}
	}				
?>

<form id="buttonlink" method="post" action="content.php?p=c">
	<div>
		<input type="submit" name="btnAction" id="btnSlumpa" value="Slumpa" />
		<input type="submit" name="btnAction" id="btnSortera" value="Sortera" />
	</div>
</form>