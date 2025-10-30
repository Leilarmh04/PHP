<?php

/** Exercice 1 : Vérifier la validité d'un âge
 *
 *  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
 *
 *  Afficher un message indiquant si l'âge est valide ou non 
 *
 * petit bonus : vérifier que l'âge est un nombre entier et non un décimal
 */

$age = 130;
if ($age < 120 && $age > 0) {
    echo "l'age est valide";
} else {
    echo "l'age n'est pas valide";
}

echo "<br> <br>";


/** Exercice 2 : Calculer la réduction
 * 
 *  Objectif : Ecrire une condition qui applique une réduction de 10% si le montant est supérieur à 100 (créer une variable montant), et 5% si le montant est entre 50 et 100€, sinon, aucune réduction n'est appliquée
 *  Bonus: trouver comment avoir la moyenne en entier et non en décimal
 */


$montant = 10;
if ($montant > 100) {
    echo "vous avez une reduc de 10%";
} elseif ($montant > 50 && $montant < 100) {
    echo "Vous avez une reuc de 5%";
} else {
    echo "vous avez pas de reduc";
}
echo "<br> <br>";

/** Exercice 3 : Afficher le jour de la semaine
 * 
 *  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)
 * 
 */

$jour = "lundi";

switch ($jour) {
    case "lundi":
        echo "<p>Aujourd'hui nous somme lundi</p>";
        break;

    case "mardi":
        echo "<p>Aujourd'hui nous somme mardi</p>";
        break;

    case "mercredi":
        echo "<p>Aujourd'hui nous somme mercredi</p>";
        break;

    case "jeudi":
        echo "<p>Aujourd'hui nous somme jeudi</p>";
        break;

    case "vendredi":
        echo "<p>Aujourd'hui nous somme vendredi</p>";
        break;

    case "samedi":
        echo "<p>Aujourd'hui nous somme samedi</p>";
        break;

    default:
        echo "nous comme dimanche";
}
if ($jour == "vendredi") {
    echo "aujd8 c vendredi";
} elseif ($jour == "lundi") {
    echo "aujd8 c lundi";
} elseif ($jour == "mardi") {
    echo "aujd8 c mardi";
} elseif ($jour == "mercredi") {
    echo "aujd8 c mercredi";
} elseif ($jour == "jeudi") {
    echo "aujd8 c jeudi";
} elseif ($jour == "dimanche") {
    echo "aujd8 c dimanche";
} elseif ($jour == "samedi") {
    echo "aujd8 c samedi";
}


echo "<br>";
echo "<br>";

/** Exercice 4 : Comparaison de chaines de caractères
 *  Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur 
 */
$nb1 = 50;
$nb2 = 50;

if ($nb1 === $nb2) {
    echo "Les deux nombres sont identiques";
} else {
    echo "les deux nombres sont pas identiques";
}
echo "<br> <br>";
/** Exercice 5 : Calcul de la moyenne
 *  
 *  Objectif : Ecrire un script qui vérifie si la moyenne trois notes est suffisante pour passer un examen, la moyenne doit être supérieure ou égale à 10 (afficher un message pour chacun des cas)
 * 
 */
$moyenne = 2;
if ($moyenne < 3) {
    echo " t null";
} elseif ($moyenne >= 10) {
    echo "ta la moyenne";
} else {
    echo "jsp";
}
echo "<br> <br>";
/** Exercice 6 : Tester une variable indéfinie
 * 
 *  Objectif : Ecrire une condition qui utilisera 'isset()' pour vérifier si une variable $var est définie, si elle est définie, afficher sa valeur, sinon afficher un message indiquant qu'elle n'est pas définie
 * 
 * Tentez avec null, '', 0 
 */


$var = null;

if (isset($var)) {
    echo "La variable est: $var";
} else {
    echo "cest pas définie.";
}

echo "<br> <br>";
/** Exercice 7 : Valider un formulaire
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable $nom est vide avec empty(), si c'est le cas, afficher un message qui demandera à l'utilisateur de remplir le champ
 *  Pas besoin d'un formulaire, faites juste une variable et tester en changeant les valeurs: string vide, non NULL...
 * 
 */


$nom = "";

if (empty($nom)) {
    echo "ya pas de nom.";
} else {
    echo "ton nom c'est est : $nom ";
}

echo "<br> <br>";
/** Exercice 8 : Vérification d'un numéro pair ou impair
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable a une valeur paire ou impaire (utiliser modulo)
 * 
 */

$nb1 = 3;

if ($nb1 % 2) {
    echo "$nb1 pair ";
} else {
    echo "$nb1 impair ";
}

echo "<br> <br>";

/** Exercice 9 : Catégoriser une personne selon son âge
 * 
 *  Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age
 */

$age = 20;

if ($age <= 10) {
    echo "enfant ";
} elseif ($age <= 15) {
    echo "adolescent ";
} elseif ($age <= 20) {
    echo "adulte ";
} else {
    echo "senior ";
}

// $age = "5";
// if ($age >= 18) {
//     echo "ta lage";
// }elseif ($age < 18) {
//     echo "tfk va dormir";
// }else{
//     echo "bienvenue";
// }

echo "<br> <br>";
/** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR
 * 
 *  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
 * 
 *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
 * 
 *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
 *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
 * 
 */

$empreinte = true;
$mdp = true;

if ($empreinte xor $mdp) {
    echo "cbn";
    
} else {
    echo "cpbn";
}

echo "<br> <br>";
