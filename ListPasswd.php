<?php
// Récupère les paramètres pour adapter selon les besoins de l'utilisateur
$SaisieNbrPasswd = $_GET['nbrPasswd']   ;
$SaisieNbrCaract = $_GET['nbrCaract']   ;
$SaisieTypePasswd = $_GET['typePasswd'] ;

// Type de caractères à prendre en compte pour générer les mots de passe (change selon paramètre utilisateur) :
if ($SaisieTypePasswd == '1')
{
$caract = "0123456789";
}
else if ($SaisieTypePasswd == '2')
{
$caract = "abcdefghijklmnopqrstuvwyxz";
}
else if ($SaisieTypePasswd == '3')
{
$caract = "abcdefghijklmnopqrstuvwyxz0123456789";
}
else if ($SaisieTypePasswd == '4')
{
$caract = "abcdefghijklmnopqrstuvwyxz0123456789@!:;,§/?*µ$=+";
}

// Nombre de caractères que le mot de passe doit contenir (= saisie utilisateur) :
$nb_caract = $SaisieNbrCaract;

// On fait un première boucle pour générer des mots de passe jusqu'au nombre indiqué par l'utilisateur
// Puis une seconde boucle pour générer le mot de passe caractère par caractère jusqu'au nombre indiqué par l'utilisateur
for($nbrPasswd = 1; $nbrPasswd <= $SaisieNbrPasswd; $nbrPasswd++)
{
for($i = 1; $i <= $nb_caract; $i++) {

// On compte le nombre de caractères
$Nbr = strlen($caract);

// On choisit un caractère au hasard dans la chaine sélectionnée :
$Nbr = mt_rand(0,($Nbr-1));

// Pour finir, on écrit le résultat :
print $caract[$Nbr];

}
echo "<br>";
}
?>