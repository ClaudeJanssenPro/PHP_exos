<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form get</title>
</head>
<body>
  <?php
    if ( $_GET["note"] == "1" || $_GET["note"] == "2"  || $_GET["note"] == "3" ) {echo "Ce travail est nul.";}
      elseif ( $_GET["note"] == "4" || $_GET["note"] == "5" ) {echo "Ce travail est mauvais.";}
      elseif ( $_GET["note"] >= "6" && $_GET["note"] <= "9" ) {echo "Ce travail n'est pas terrible";}
      elseif ( $_GET["note"] == "10" ) {echo "Tout juste!";}
      elseif ( $_GET["note"] >= "11" && $_GET["note"] <= "14" ) {echo "C'est pas mal.";}
      elseif ( $_GET["note"] >= "15" && $_GET["note"] <= "18" ) {echo "Bravo!";}
      elseif ( $_GET["note"] == "19"  ||  $_GET["note"] == "20"  ) {echo "Police! Arrêtez ce tricheur!";}
   ?>
     <br><br>
   <a href="formulaire02.php">Retour</a>

</body>
</html>
