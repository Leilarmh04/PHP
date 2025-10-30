<?php

/**Exercice 1 : Créer un tableau simple
 *  Objectif : Créez un tableau contenant les noms de vos cinq films préférés.
 *  Instructions :
 *  Déclarez le tableau avec les titres des films.
 *  Affichez chaque film sur une ligne séparée dans un var_dump().
 */
$film = ["conjuring", "l'étè ou je suis devenue jolie", "Ma vie avec les walter boys", "Anne with an e", "Demon slayer"];

var_dump($film[0]);
var_dump($film[1]);
var_dump($film[2]);
var_dump($film[3]);
var_dump($film[4]);

echo"<br>";
/** Exercice 2 : Ajouter et supprimer des éléments d'un tableau
 *   Objectif : Manipulez un tableau en ajoutant et en supprimant des éléments.
 *   Instructions :
 *   Créez un tableau avec quelques fruits.
 *   Ajoutez un fruit à la fin du tableau.
 *   Supprimez le premier fruit du tableau. Chercher la méthode qui permet de le faire
 *   Affichez le tableau modifié.
 */
echo"<br> <br>";

$frut = ["passion", "dragon", "durian"];
$frut[] = "salak"; 
array_shift($frut); 
var_dump($frut);

/** Exercice 3 : Créer et afficher un tableau associatif
 *   Objectif : Travaillez avec un tableau associatif.
 *   Instructions :
 *   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
 *   Affichez chaque information avec une phrase descriptive.
 */
echo"<br> <br>";

$user = [
    "prenom" => "Assane",
    "nom" => "Diop",
    "age" => 24,
];

echo "Prénom : " . $user["prenom"] . "<br>";
echo "Nom : " . $user["nom"] . "<br>";
echo "Âge : " . $user["age"] . " ans<br>";

/**Exercice 4 : Compter les éléments d'un tableau
 *  Objectif : Utilisez les fonctions count() et sizeof().
 *  Instructions :
 *  Créez un tableau avec plusieurs villes.
 *  Affichez le nombre d'éléments dans le tableau.
 */
echo"<br> <br>";
$ville = ["Molenbeek", "Lyon", "Marseille", "Toulouse", "Nice"];
echo "Le tableau contient " . count($ville) . " villes<br>";
echo "Avec sizeof() on obtient" . sizeof($ville) . " villes";


/** Exercice 5 : Créer un tableau multidimensionnel
 *   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
 *   Instructions :
 *   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
 *   Affichez la note du premier étudiant.
 */
echo"<br> <br>";

$etudiants = [
    ["prenom" => "Leila", "nom" => "Ramouhi", "note" => "20"],
    ["prenom" => "Saliha", "nom" => "Bekhti", "note" => "20"],
    ["prenom" => "Hayata", "nom" => "Traore", "note" => "20"],
    ["prenom" => "Abir", "nom" => "Ahmed", "note" => "20"],
];


echo "L'étudiant(e) (" . $etudiants[0]["nom"] . " " . $etudiants[0]["prenom"] . ") a eu : " . $etudiants[0]["note"] . " de moyenne <br> t chauuuude !!!!";


/** Exercice 6 : Modifier un tableau multidimensionnel
 *   Objectif : Modifiez un tableau multidimensionnel.
 *   Instructions :
 *   Utilisez le tableau multidimensionnel créé dans l'exercice précédent.
 *   Changez la note du deuxième étudiant.
 *   Affichez toutes les informations du tableau modifié.
 */
echo"<br> <br>";

$etudiants[1]["note"] = 20;

foreach ($etudiants as $etudiant) {
    echo "Prenom : " . $etudiant["prenom"] . 
         " | Nom : " . $etudiant["nom"] . 
         " | Note : " . $etudiant["note"] . "<br>";
}


/** Exercice 7 : Boucle for pour parcourir un tableau
 *   Objectif : Utilisez une boucle for pour parcourir un tableau.
 *   Instructions :
 *   Créez un tableau avec les mois de l'année.
 *   Utilisez une boucle for pour afficher chaque mois.
 */
echo"<br> <br>";

$mois = [
    "Janvier", "Février", "Mars", "Avril",
    "Mai", "Juin", "Juillet", "Août",
    "Septembre", "Octobre", "Novembre", "Décembre"
];


for ($j = 0; $j < count($mois); $j++) {
    echo "Mois " . ($j + 1) . " : " . $mois[$j] . "<br>";
}



/** Exercice 8 bonus : Rechercher une valeur dans un tableau
 *   Objectif : Cherchez une valeur spécifique dans un tableau.
 *   Instructions :
 *   Créez un tableau avec des numéros aléatoires.
 *   Cherchez si un numéro spécifique est présent dans le tableau. Trouver la méthode pour
 *   Affichez un message en fonction du résultat de la recherche.
 */
echo"<br> <br>";

$nbr = [4, 29, 65, 33, 45, 58, 71, 88];
$recherche = 58;

if (in_array($recherche, $nbr)) {
    echo "Le numéro $recherche existe ! Felicitation !!!";
} else {
    echo "Le numéro $recherche existe pas ! Breuuuh !!!";
}


/** Exercice 9 : Fusionner deux tableaux (Bonus)
 *   Objectif : Fusionnez deux tableaux en un seul.
 *   Instructions :
 *   Créez deux tableaux : un contenant des prénoms et un autre contenant des noms de famille.
 *   Fusionnez ces deux tableaux pour créer un tableau de noms complets.
 *   Affichez chaque nom complet sur une ligne.
 * 
 *  Aide: utiliser des boucles for
 */

echo"<br> <br>";


$prenom = ["Sihem", "Adam", "Sara", "Halyia", "Nadia"];
$nom = ["Mamamam", "Bababa", "Nanana", "Hahaha", "Yayaya"];
$nomComplet = [];

for ($p = 0; $p < count($prenom); $p++) {
    $nomComplet[] = $prenom[$p] . " " . $nom[$p];
}

for ($p = 0; $p < count($nomComplet); $p++) {
    echo " " . $nomComplet[$p] . "<br>";
}

