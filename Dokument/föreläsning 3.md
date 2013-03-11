FUNKTIONER OCH VEKTORER I PHP
FÖRELÄSNING #3
kap 4 & 5
--------------

PHP går att koda/strukturera med:
- funktioner
- klasser (objekt)

Lite förenklat kan man se en funktion som en metod utan klass och som anropas utan objekt/klass.

Grundstruktur -
function funktionsnamn () {}

Med värdeparameter - 
function funktionsnamn ($p) {}

Med referensparameter -
function funktionsnamn (&$p) {}

Med frivillig parameter - 
-- ($p = defaultvärde) {}

Med returvärde -
-- () {
return $p;
}


VEKTORER 
--------

$vektor[] = värde;
$vektor[0] = värde;
$vektor[index] = värde;
array array (värde_1, värde_2, värde_n);
array array (index => värde_1, index => värde_n);

Vektor har en dimension.
Matris har två dimensioner.

Kontrollera om variablen innehåller en vektor:
boolean is_array(variabel);
	if(is_array($minvektor)) {}

Ta reda på antalet positioner i vektorn:
integer count(variabel);

Skapa och fyll en vektor med värden: 
array array_fill(start, antal, värde);

Skapa en vektor av en sträng:
array explode(tecken, sträng);

Skapa en sträng av en vektor:
string implode(tecken, vektor);

Slumpa ett tal mellan min och max:
int mt_rand(min, max);

Sortara en vektor i stigande ordning:
bool sort(vektor); 


EOL = end of line

OBJEKTORIENTERING I PHP
-----------------------

Klass skapas - 
class Bil ()

För arv används - extends

En klass har attribut och metoder vars synlighet skall spcifieras -
private $intArray;
public function vector2string() {}

En metod kan (men måste inte) returnera ett värde -
return $strVector;

Självreferns - $this->intVector;

För att inkludera fil - include (”filnamn.php”);
För att instansiera ett object - $varNamn = new Klassnamn();
För att anropa en metod - $varNamn->metodnamn();

