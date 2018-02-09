<?php
$pronoms_personnels = array(
  'Je' => 'code',
  'Tu' => 'codes',
  'Il/Elle' => 'code',
  'Nous' => 'codons',
  'Vous' => 'codez',
  'Elles/Ils' => 'codent',
);

$web_development ['frontend'][] = 'xhtml';
$web_development ['backend'][] = 'Ruby on Rails';
$web_development ['frontend'][] = 'CSS';
$web_development ['frontend'][] = 'Flash';
$web_development ['frontend'][] = 'Javascript';
$web_development['frontend']['0'] = 'html';
$web_development['frontend']['0'] = 'html';
array_splice($web_development['frontend'], 2, 1);
$nombre_de_lignes = 1;
$phrase = "Je ne dois pas regarder les mouches voler quand j'apprends le PHP";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arrays</title>
</head>
    <body>
      <?php
      echo '<pre>';
      foreach ($pronoms_personnels as $pro => $verbe) {
          echo  $pro ,' '. $verbe . "<br />";
      }
      echo '</pre>';
      echo "While x 120";
      echo "<br />";
      echo '<pre>' ;
      while ($nombre_de_lignes <= 120) {
        echo 'Ceci est la ligne While n°' . $nombre_de_lignes . "<br />";
          $nombre_de_lignes++;
      }
      echo '</pre>';
      echo "For x 120";
      echo "<br />";
      echo '<pre>' ;
      for ($nombre_de_lignes = 1; $nombre_de_lignes <= 120; $nombre_de_lignes++) {
        echo 'Ceci est la ligne For n°' . $nombre_de_lignes . "<br />";
      }
      echo '</pre>';
      ?>
    </body>
</html>


<!--
https://github.com/becodeorg/Turing-promo-4/blob/master/parcours/2-PHP/Introduction-Exercices/php-boucles.md

Crée un tableau contenant tous les prénoms des personnes composant ta classe. Affiche ces prénoms à l'aide d'une boucle.
Crée un tableau contenant au moins 10 pays du monde. Une fois fait, utilise une boucle pour générer du html correspondant à une selectbox permettant à un utilisateur d'indiquer son pays dans un formulaire html.
A présent, modifie ton tableau contenant les pays pour qu'il soit un tableau associatif: la clef est le code ISO du pays, la valeur étant le nom du pays: par exemple: $pays = array('BE'=>'Belgique'); au lieu de simplement $pays = array('Belgique');. Utilise la clef pour qu'elle devienne la valeur de la balise option dans ton html.
-->
