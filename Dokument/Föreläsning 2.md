SYSTEMIMPLEMENTERINGSTEKNIK ISGB11 
Föreläsning #2 5 Mars
-----------
Del 1.

Formulär. 
Två attribut man behöver hålla koll på. Viktiga för formuläret som helhet. ”action” & ”method”. 

Action - vart ska datan skickas?

Method - hur ska grejorna skickas från klient till server? Post eller get. 
Get - skickas i adressen. Kan ofta ses i adressfältet. Post - så ser man inte datan.

Input - text, submit, reset, hidden. (minimum. <input type=”submit” name=”btn” value=”skicka”>)

Grunder i PHP
------------
PHP är ett server-side skriptspråk som på servern ”förprocessar” det dokument som skall skickas till efterfrågande klient. 

Det är ett löst typat språk. (kan både förenkla och försvåra) Man behöver inte deklarera variabler eller datatyp.

1995 utvecklades ett skript som räknade antal besökare. Det kallades Personal Home Page (PHP).

1997 lanserades PHP 2.0, första riktiga PHP. 1998 kom PHP 3.0. 2000 kom PHP 4.0. 2004 kom PHP 5.0. Idag har vi PHP 5.4.11. 

PHP
-----
<?php 

//Radkommentar
/* Flerrads */

//PHP mellan start- och sluttag.

?>

Variabler
---------
$variabelnamn = variablevärde;
$name = ”Allan”;
$name .= ”Svensson”; //Punkten betyder att man behåller det man satt första gången.

echo();
echo(”Utskrift!” . PHP_EOL);
echo($name . PHP_EOL);

PHP_EOL - betyder byt rad.

(http://php.net/manual)

Inkludera andra filer
-----------------------
include(path + filname);
ex. include(”src/myArray.php”);

”Buffra” output.
-----------------
(http://php.net----manual/function.ob_start)
bool ob_start ( [callable $output_callback [, int $chunk_size = 0 [, bool $erase = true ]]] );

ob_start();

För att för aktuellt skript ändra konfigurationen
-------------------------------------------------

string ini_set (string $varname, string $newvalue );
ini_set(”display_errors”, 1);


DEL 2 av föreläsning.
--------------------

<?php 
header("Content-Type: application/xhtml+xml; charset=utf-8”);
error_reporting(E_ALL);
ini_set(”display_errors”, 1);
?>

<?php 
echo(”<p> Detta är en första PHP-exempel</p>” .PHP_EOL);
echo($svarsaknas);
echo();
?>

<?php 
ob_start();
header("Content-Type: application/xhtml+xml; charset=utf-8”);
include(”debug.php”);
?>

SELEKTION & ITERATION
---------------------

Olika operatorer - jämförelse-operatorer, logiska operatorer & aritmetiska operatorer. 

Selektion - if & switch.

Iteration - for & while.

== - lika med
=== - indentisk med (samma värde & samma datatyp)

switch(variabel)
{
		case 1:
	statement;
	break;
		case 1:
	statement;
	break;
		case 1:
	statement;
	break;
		default:
	statement;
}


