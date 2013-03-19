<?php
	
	echo("hidden.php");
	
	$oMyArray = new MyArray();
				   	
	if(isset($_POST["btnAction"])) { // Kontrollera om något kommer in från formuläret. Om något tryckt på knappen btnAction
		
		if($_POST["btnAction"] == "Slumpa") { // Om någon tryckt på motsvarande knapp går vi in här
			$oMyArray->randomArray();
			echo($oMyArray->array2XHTMLTable());
		}
		
		if($_POST["btnAction"] == "Sortera") { // Om någon tryckt på motsvarande knapp går vi in här
			$oMyArray->string2Array($_POST["hidArray"]);
			
			//$oMyArray->sortArray();
			//echo($oMyArray->array2XHTMLTable());
		}
	}
				
?>

<form id="buttonlink" action="content.php?p=h">
	<div>
		<input type="submit" name="btnAction" value="Slumpa" />
		<input type="submit" name="btnAction" value="Sortera" />
		
		<input type="hidden" name="hidArray" value="<?php echo($oMyArray->array2String()); ?>"/>
	</div>
</form>