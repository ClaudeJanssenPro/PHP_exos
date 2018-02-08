<?php
setlocale(LC_TIME, 'fr_FR.UTF8');
$heure = strftime("%R");
/*$salute = if($heure >= "05:00" && $heure <= "09:00" ) {echo "Bon matin";}
elseif ( $heure >= "09:01" && $heure <= "12:00" ) {echo "Bonnne matinée";}
elseif ( $heure >= "12:01" && $heure <= "16:00" ) {echo "Bon après-midi";}
elseif ( $heure >= "16:01" && $heure <= "21:00" ) {echo "Bonne soirée";}
elseif ( $heure >= "21:01" && $heure <= "04:59" ) {echo "Bonne nuit";}
;
*/
?>



<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Horloge PHP</title>
</head>
<body>
  <h1><?php echo "$heure" . ", il est " . "$heure"; ?></h1>
</body>
</html
