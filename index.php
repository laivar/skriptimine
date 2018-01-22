
<?php
// tehtud Atom-i nimelise tarkvaraga
$greetings="Tere";
// tekstimuutuja
$nr = 1;
// Täisarvuline muutuja
$nr = 10.0231;
// kümnendmurd
$bool = False;
//tõeväärtus
$massiiv = array('Nimi',1974,10.12,'Perenimi');
// masiivis algab number "0"-iga

echo "$greetings tulemast!<br>";

// echo '$greetings tulemast!';
// kui tahan kuvada "Perenimi", siis masiivist number "3"

/*
nende vahele saab kommenteerida ohjeldamatult
nagu näha tegin teise rea ka kohe järgi
*/

// tingimuslause
if ($bool == False){
// print_r($massiiv);
//  print_r
for ($i = 0; $i < count($massiv); $i++ ) {
  echo $massiiv [$i]. '<br>';
}
} else { echo "Tõeväärtus ei vasta nõuetele";}
 ?>
