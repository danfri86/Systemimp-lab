SYSTEMIMPLEMENTERING
18/3
____________________

Se om något är satt:

				if (isset($_POST["btnAction"])) {
					echo($_POST["btnAction"]);
				}


if (isset($_GET[”linkAction”])) {
	echo($_GET[”linkAction”]);
}

TILLSTÅNDSLÖS MILJÖ
-------------------

Två sätt att överbrygga problemet är:
 - gömda fält
 - modifierad url

Inom ett formulär så kan vi gömma fält. Dessa fält är INTE synliga för den granska representationen. Fälten fungerar som värdebärare inom formuläret, för att bland annat säkerställa att rätt post uppdateras i en databas. 

SUPERGLOBALA funktioner & vektorer
----------------------------------
print_r()
isset()
empty()
$_POST()
$_GET()


if ($_POST[”btnAction”] == Slumpa) {
	$oMyArray->randomArray();
	$oMyArray->array2zHTMLTable();  
}

	
