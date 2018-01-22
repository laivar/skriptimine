
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

$esta = 'Eesti keel';
$mata = 'Matemaatika';
$fys = 'Füüsika';

//sidusmassivid
$hinded = array('Mati'=>array( $esta =>4, $mata =>4, $fys =>1),
                'Kati'=>array( $esta =>3, $mata =>4, $fys =>5),
                'Kaie'=>array( $esta =>5, $mata =>5, $fys =>5));

echo "$greetings tulemast!".'<br>';

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
for ($i = 0; $i < count($massiiv); $i++ ) {
  echo $massiiv [$i]. '<br>';
}
} else { echo "Tõeväärtus ei vasta nõuetele";}

$hinded_id = array_keys($hinded);
for ($i=0; $i < count($hinded); $i++){
  echo $hinded_id[$i].'<br>';
  foreach ($hinded[$hinded_id[$i]] as $aine => $hinne) {
    echo $aine." : ".$hinne.'<br>';


    # code...
  }
}
 ?>
