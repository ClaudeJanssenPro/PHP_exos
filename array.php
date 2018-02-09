<!--
https://github.com/becodeorg/Turing-promo-4/blob/master/parcours/2-PHP/Introduction-Exercices/php-array.md
-->

<?php
  $family = array( 'Michel', 'Claudine' , 'Mathéo', 'Fabian', 'Raphaël' );
  $fav_food = array( 'Bolognaise', 'Poulet' , 'Pizza');
  $fav_movie = array( 'Vikings', 'Star Trek' , 'The Orville', 'Star Wars', 'Family Guy');
  $utilisateur = array(
    'prenom' => 'Juan',
    'nom' => 'Pablo',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Bruxelles'
    );
  $papa = array(
      'naissance'	=> 1961 ,
      'prenom' 		=> 'Albert' ,
      'nom' 	  		=> 'Janssen' ,
      'aime_le_foot' => false ,
      'hobbies' 	=> array( 'Chasse', 'Pêche' , 'Séries', 'Marche')
    );
  $moi = array(
      'naissance'	=> "1979" ,
      'prenom' 		=> 'Claude' ,
      'nom' 	  		=> 'Janssen' ,
      'aime_le_foot' => true ,
      'hobbies' 	=> array( 'Lecture', 'Course' , 'Séries', 'PC') ,
      'papa' => $papa
    );
$moi['hobbies'][] = 'Taxidermie';
$moi['nom'] = 'Dieudonné';
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
      echo "<br />";
      echo $utilisateur['ville'];
      echo "<br />";
      echo "<br />";
      echo '<pre>';
      print_r($moi);
      echo '</pre>';
      echo '<br>';
      echo $moi['nom'];
      echo '<br>';
      echo "# Hobbies de papa : "; echo count($papa['hobbies']);
      echo '<br>';
      echo "# Hobbies : "; echo count($moi['hobbies']);
      echo '<br>';
      echo "Somme : "; echo count($papa['hobbies'])+count($moi['hobbies']);
      echo '<br>';
      echo '<pre>';
      echo "Hobby communs : "; print_r(array_intersect($papa['hobbies'],$moi['hobbies']));
      echo '</pre>';
      echo '<br>';
      echo '<pre>';
      echo "Nos hobbies : "; print_r(array_merge($papa['hobbies'],$moi['hobbies']));
      echo '</pre>';
      ?>
    </body>
</html>
