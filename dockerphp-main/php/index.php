<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- EXO 1 -->
    <?php
       $nom = "BALDE";
       $prenom = "Yaya";
       $age = 22;
       $taille = 1.83;
    //    echo ($nom . " " . $prenom . " " . $age . " " . $taille);
       ?><br>
       <?php

       $age2 = $age + 2;
       echo "Je m'appelle " . $nom . " " . $prenom . ", j'ai " . $age2 . " et je mesure " . $taille;

    ?><br>


<!-- EXO 2 -->

    <?php
        $concat = $nom . ", " . $prenom . ", " . $age2 . ", " . $taille;
        var_dump($concat)."\r\n"
    ?><br>

<!-- EXO 3 -->

<?php

    $matheo = 15.4;
    $nathan = 9.2;
    $leo = 16.1;
    $maxime = 12.6;

    $moyenne = ($matheo + $nathan + $leo + $maxime) / 4;
    echo "La moyenne des élèves est:  $moyenne"
?><br>

<!-- EXO 4 -->
<?php
    // Affichez moi dans la page de votre navigateur un chiffre aléatoire compris entre 1 et 12000
    $aleatoire = mt_rand(1, 12000);
    echo "Le nombre aléatoire est: $aleatoire"
?>
</body>
</html>