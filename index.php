<meta charset="UTF-8" />

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

//sidusmassiivi väljatrükk
$hinded_id = array_keys($hinded);
for ($i=0; $i < count($hinded); $i++){
  echo $hinded_id[$i].'<br>';
  foreach ($hinded[$hinded_id[$i]] as $aine => $hinne) {
    echo $aine." : ".$hinne.'<br>';


    # code...
  }
}


$file = fopen('counter.txt', "w") or die("Ei saanud faili avada");
if (!$file){

$txt = 1;

fwrite($file,$txt);
fclose($file);
} else {
$txt = fread($file, filesize('counter.txt'));
$new_txt = $txt + 1;
fwrite($file,$txt);
fclose($file);

}


$file = fopen('counter.txt', "r") or die("Ei saanud faili avada");
echo fread($file, filesize('counter.txt'));
fclose($file);

 ?>
