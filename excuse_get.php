<?php
//("%A, le %e %B %Y");
//$teacher = $_GET["teachersname"];
function get_date()
{
   $eng_words = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday',
   'Sunday', 'January', 'February', 'March', 'April', 'May', 'June', 'July',
'August', 'September', 'October', 'November', 'December');

   $french_words = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi',
   'Dimanche', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet',
'août', 'septembre', 'octobre', 'novembre', 'décembre');

   $date_str = date('l') .' '. date('d') .' '. date('F') .' '. date('Y');

   $date_str = str_replace($eng_words, $french_words, $date_str);


   return $date_str;
}
$kid = $_GET["kidsname"];
$teacher = $_GET["teachersname"];
if($_GET["motive"] == "ill") {$motive = "car il souffre d'une xylostomie passagère.";}
  elseif($_GET["motive"] == "petsdcd") {$motive = "suite au décès inopiné de son éphémère de compagnie.";}
  elseif($_GET["motive"] == "xtra") {$motive = "car il prend une année sabatique.";}
  elseif($_GET["motive"] == "other") {$motive = "car il a fait voeux de solitude.";}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="excuse_style.css">

    <title>Générateur d'excuses - Résultat</title>
  </head>
  <body>
    <?php print(get_date());?>
    <br/>
    <br/>
    <p>
      Madame <?php echo "$teacher" ?>,<br/>
      Je vous prie de bien vouloir excuser l’absence de <?php echo "$kid" ?>.<br/>
      En effet, il n’a pas pu se rendre en classe <?php echo "$motive" ?><br/>
      Je vous saurais gré d’en prendre note et m’en remets à votre compréhension.<br/><br/>
      Je vous prie de croire, madame <?php echo "$teacher" ?>, à l’assurance de mes salutations les plus sincères.<br/>
    </p>
        <br/><br/>
        <br/><br/>
        <a href="excuse.php">Retour</a>
  </body>
</html>

<!--
Le parent n'aura plus qu'à copier-coller la réponse pour rédiger sa lettre d'excuses.
Critères de perfectionnement

    ajoute la date du jour (format "Day, le dd Month YYYY")
    ajoute la formule de politesse.
    pas de faute d'orthographe.
    UX soignée: en faire un vrai produit? ( CSS + typographie + logo ) -->
