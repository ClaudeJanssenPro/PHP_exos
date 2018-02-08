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
      $FE = "Bonjour madame";
      $HO = "Bonjour monsieur";
      $bonjour = ($_GET["genre"] == "fe") ? $FE : $HO ;
      echo "$bonjour";

   ?>
     <br><br>
   <a href="formtern.php">Retour</a>

</body>
</html>
