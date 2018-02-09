<!--
https://github.com/becodeorg/Turing-promo-4/blob/master/parcours/2-PHP/Introduction-Exercices/php-array.md
    ensuite, ajoute une ligne en dessous qui remplace la ligne contenant "xhtml" par "html".
    ensuite, ajoute une ligne en dessous qui efface la ligne contenant "Flash".
  -->

<?php
  $web_development  = array(
      'frontend' 	=> array(),
      'backend' 	=> array()
    );
$web_development ['frontend'][] = 'xhtml';
$web_development ['backend'][] = 'Ruby on Rails';
$web_development ['frontend'][] = 'CSS';
$web_development ['frontend'][] = 'Flash';
$web_development ['frontend'][] = 'Javascript';
$web_development['frontend']['0'] = 'html';
$web_development['frontend']['0'] = 'html';
array_splice($web_development['frontend'],2,1);
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
      print_r($web_development);
      echo '</pre>';
      ?>
    </body>
</html>
