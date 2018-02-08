<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulaire Ternaire</title>
</head>
<body>
   <form action="ternaire.php"  method="get">
        Homme ou Femme ? : <input type="radio" name="genre"  <?php if (isset($genre) && $genre=="fe") echo "checked";?>
   value="fe">Femmme
   <input type="radio" name="genre" <?php if (isset($genre) && $genre=="ho") echo "checked";?>
   value="ho">Homme
     <br>
     <br>
     <br>
   <input type="submit" name="submit" value="Envoyer">
   </form>

   </body>
   </html>
