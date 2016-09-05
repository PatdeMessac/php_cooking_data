<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
echo $dico . "\n";
/*echo "le dictionnaire contient" . $dico . "mots");*/
/*How many words this dictionary contains?*/
$longueur = count($dico);
print_r("le dictionnaire contient " . $longueur . " mots");

/*How many words have exactly 15 characters?*/

/*$tri = sort_string(15);*/
/*echo wordwrap($longueur,15);*/

/*How many words containing the letter 'w'?*/
/*How many words end with the letter 'q'?*/

echo '<br>';

$individu = array(
'Nom'=>'Alan',
'Prenom'=>'Martin',
'Age'=>18,
'Nationalité'=>'Français',
);
// pour parcourir ce tableau, utilisons la boucle foreach
foreach($individu as $cle=>$valeur)
    {
    echo $cle.' : '.$valeur.'<br>';
    }
    /*
Cet exemple affiche :
Nom : Alan
Prenom : Martin
Age : 18
Nationalité : Français
*/
?> 