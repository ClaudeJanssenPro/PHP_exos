<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulaire</title>
</head>
<body>
   <form action="form_get.php"  method="get">
    Quel est votre âge ? : <input type="number" name="age"><br>
    Homme ou Femme ? : <input type="radio" name="genre"  <?php if (isset($genre) && $genre=="fe") echo "checked";?>
   value="fe">Femmme
   <input type="radio" name="genre" <?php if (isset($genre) && $genre=="ho") echo "checked";?>
   value="ho">Homme
     <br>
     Do you speak English? : <input type="radio" name="english"  <?php if (isset($english) && $english=="yes") echo "checked";?>
    value="yes">Yes
    <input type="radio" name="english" <?php if (isset($english) && $english=="non") echo "checked";?>
    value="non">Non
     <br><br>
   <input type="submit" name="submit" value="Envoyer">
   </form>

   </body>
   </html>
