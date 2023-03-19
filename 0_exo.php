<?php
echo "<h1>Exercices Php</h1>";
echo "<h2> 1/ Trouvez la fonction PHP pour afficher la version de PHP et les infos de configuration</h2>";
echo phpinfo( INFO_GENERAL );
echo "<h2> 2/ Afficher en PHP les chaines suivantes : (le - ne fait pas partie de la chaine !) à l'interieur de la balise indiquée entre ()</h2>";
echo "<span> Demain j'apprends l'algo PHP et j'évite l'erreur</span><br>" ;
echo "<br>";
echo "<div>le chemin : del c:\\*.* n'existe pas</div>";
echo "<h3>l'objet \"auteur\" n'est pas l'auteur de l'objet </h3>";
echo "<p>Si l'on continue à s'extasier l'on n'aura plus d'élan</p>";

echo "<h2>3/ Extrayez les composants Scheme / Host / Path de l'url suivante</h2>";
$url = "https://www.monsite.com/php-exercises/php-basic-exercises.php";
echo "<span>Scheme: " . parse_url( $url, PHP_URL_SCHEME ) . "</span><br>";
echo "<span>Host: " . parse_url( $url, PHP_URL_HOST ) . "<span><br>";
echo "<span>Path: " . parse_url( $url, PHP_URL_PATH ) . "<span><br>";
 
echo "<p>4/ Ecrivez un script php qui colorie (et affiche) en bleu le premier caractère d'un mot ou d'une chaine passée en argument<p>";
$first_char = "Ecrivez un script PHP qui colorie ...";
$first_char = preg_replace( "/(\b[a-z])/i",'<span style = "color:blue;">\1</span>', $first_char ); 
    // echo "<span style= 'color:blue'> $first_char[0] </span><br>";
echo $first_char;

echo '<h2>5/ En utilisant la variable suivante : $d = "A00" , affichez les éléments suivants :  </h2>';
$d = "A00";
$i = $d[ 2 ];
while ( $i <= 5 ){
    echo "A0" . $i . "<br>";
    $i++;
};
/* output 
 A01
 A02
 A03
 A04
 A05*/
echo "<h2> 6/ Ecrivez un script PHP pour trouver la liste des nombres premiers inférieurs à 100 (rappel : un nombre premier n'est divisible que par 1 et lui-même) et retournez la somme de ces nombres (égale à 1060 ! )</h2><br>"; 
$nombre_premier = array();
$nb_premier = false;
for ( $i = 2; $i < 100; $i++ ) {
    $nb_premier = true; 
    for ( $j = 2; $j <= ( $i/2 ); $j++) {
        if ( $i%$j==0 ) {
            $nb_premier = false;
        };
    };
    if ( $nb_premier ) {
        array_push( $nombre_premier,$i );
    };
    if ( count( $nombre_premier ) == 100) {
    };
};
foreach ( $nombre_premier as $item ){
    echo "$item"." ";
};
echo "<span>La somme des nombres premiers est </span>".array_sum($nombre_premier)."\n";

echo "<h2>7/ Affichez la multiplication des entiers entre 1 et 10 dans une table HTML à double entrée (colonnes de 1 à 10, lignes de 1 à 10) </h2>";
echo "<p>Table de Pythagore</p>";
echo "<table>";
for( $i = 1; $i <= 10; $i++ ){
    echo "<tr><td>$i</td>";
    for($j = 2; $j <= 10; $j++ ){
        $res = $i * $j;
        echo "<td>$res</td>";
    }
    echo "</tr>";
}
echo "<table>";
 
echo "<h2> 8/ Ecrivez un programme PHP pour résoudre l'équation: </h2>";
echo "<p>ax + by = c</p>" ;
echo "<p>dx + ey = f/<p>";
echo "<a href=http://serge.mehl.free.fr/anx/id_bezout_jv.html>Identité de Bézout</a>";
 
echo "<h2>9/ Ecrivez un script PHP pour compter le nombre de voyelles d'un mot (d'une chaine) passé(e) en argument</h2>";
echo "<h2> 10/ Ecrivez un script PHP qui compte le nombre de fois qu'une fonction a été appelée et permet de limiter ce nombre ... si la fonction est appelée plus que prévu, elle retourne NULL<h2>";