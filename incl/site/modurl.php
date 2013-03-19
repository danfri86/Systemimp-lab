<?php
	
	echo("modurl.php");
	
	include("incl/myArray.php");
	
	$oMyArray = new MyArray();

	if(isset($_GET["action"])) { // Kontrollera om något kommer in från formuläret. Om något tryckt på knappen btnAction
		
		if($_GET["action"] == "Slumpa") { // Om någon tryckt på motsvarande knapp går vi in här
			$oMyArray->randomArray();
			echo($oMyArray->array2XHTMLTable());
		}
		
		if($_GET["action"] == "Sortera") { // Om någon tryckt på motsvarande knapp går vi in här
			$oMyArray->string2Array($_GET["linkArray"]);
			$oMyArray->sortArray();
			echo($oMyArray->array2XHTMLTable());
			$oMyArray->array2String($_GET["linkArray"]);
		}
	}

				
?>

<div id="buttonlink">
	<a href="content.php?p=m&amp;action=Slumpa&amp;linkArray=<?php echo($oMyArray->array2String()); ?>">Slumpa</a>
	<a href="content.php?p=m&amp;action=Sortera&amp;linkArray=<?php echo($oMyArray->array2String()); ?>">Sortera</a>
</div>