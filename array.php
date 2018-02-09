<!--
https://github.com/becodeorg/Turing-promo-4/blob/master/parcours/2-PHP/Introduction-Exercices/php-array.md
Crée un array représentant ta famille.
Affiche son contenu avec la fonction print_r
Crée un array décrivant tes plats préférés.
Affiche son contenu avec la fonction print_r
Crée un array listant tes films et séries préférés.
En utilisant cet array, affiche uniquement ton film/série préféré (echo $pays[2];)

-->

<?php
  $family = array( 'Michel', 'Claudine' , 'Mathéo', 'Fabian', 'Raphaël' );
  $fav_food = array( 'Bolognaise', 'Poulet' , 'Pizza');
  $fav_movie = array( 'Vikings', 'Star Trek' , 'The Orville', 'Star Wars');
  $utilisateur = array(
    'prenom' => 'Juan',
    'nom' => 'Pablo',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Bruxelles'
    );
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arrays</title>
</head>
    <body>
      <?php
      print_r($family);
      echo "<br />";
      print_r($fav_food);
      echo "<br />";
      echo $fav_movie[0];
      ?>
    </body>
</html>
