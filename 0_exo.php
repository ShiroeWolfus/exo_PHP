<?php
echo "<h1>Exercices Php</h1>";
echo "<h2> 1/ Trouvez la fonction PHP pour afficher la version de PHP et les infos de configuration</h2>";
echo phpinfo(INFO_GENERAL);
echo "<h2> 2/ Afficher en PHP les chaines suivantes : (le - ne fait pas partie de la chaine !) à l'interieur de la balise indiquée entre ()</h2>";
echo "<span> Demain j'apprends l'algo PHP et j'évite l'erreur</span><br>" ;
echo "<br>";
echo "<div>le chemin : del c:\\*.* n'existe pas</div>";
echo "<h3>l'objet \"auteur\" n'est pas l'auteur de l'objet </h3>";
echo "<p>Si l'on continue à s'extasier l'on n'aura plus d'élan</p>";

echo "<h2>3/ Extrayez les composants Scheme / Host / Path de l'url suivante</h2>";
$url = "https://www.monsite.com/php-exercises/php-basic-exercises.php";
echo "<span>Scheme: ".parse_url($url, PHP_URL_SCHEME)."</span><br>";
echo "<span>Host: ".parse_url($url, PHP_URL_HOST)."<span><br>";
echo "<span>Path: ".parse_url($url, PHP_URL_PATH)."<span";
 
echo "<p>*4/ Ecrivez un script php qui colorie (et affiche) en bleu le premier caractère d'un mot ou d'une chaine passée en argument<p>";
// $text = 'PHP Tutorial';
function color($text){
    preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
    // echo "<span style= 'color:blue'> $first_char[0] </span><br>";
}
color("Bravo");
// 5/ 
// En utilisant la variable suivante : $d = "A00" , 
// affichez les éléments suivants :  
// A01
// A02
// A03
// A04
// A05
 
// 6/
// Ecrivez un script PHP pour trouver la liste des nombres premiers inférieurs à 100 
// (rappel : un nombre premier n'est divisible que par 1 et lui-même) 
// et retournez la somme de ces nombres (égale à 1060 ! )
 
// 7/ 
// affichez la multiplication des entiers entre 1 et 10 dans une table HTML à double entrée (colonnes de 1 à 10, lignes de 1 à 10) 
 
// 8/ 
// ecrivez un programme PHP pour résoudre l'équation 
// ax + by = c 
// dx + ey = f
// (http://serge.mehl.free.fr/anx/equ1.html#:~:text=Pour%20r%C3%A9soudre%20une%20%C3%A9quation%20du,%E2%87%94%20x%20%3D%205%2F6.)
 
// 9/
// ecrivez un script PHP pour compter le nombre de voyelles d'un mot (d'une chaine) passé(e) en argument
 
// 10/
// ecrivez un script PHP qui compte le nombre de fois qu'une fonction a été appelée et permet de limiter ce nombre ... si la fonction est appelée plus que prévu, elle retourne NULL