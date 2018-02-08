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
  $note = $_GET["note"];
    switch ($note) {

      case ($note == 1 || $note == 2 || $note == 2):
            echo "Ce travail est nul.";
            break;
      case 4:
      case 5:
            echo "Ce travail est mauvais.";
            break;
      case 6:
      case 7:
      case 8:
      case 9:
            echo "Ce travail n'est pas terrible.";
            break;
      case 10:
            echo "Tout juste!";
            break;
      case 11:
      case 12:
      case 13:
      case 14:
            echo "C'est pas mal.";
            break;
      case 15:
      case 16:
      case 17:
      case 18:
            echo "Bravo!";
            break;
      case 19:
      case 20:
            echo "Police! Arrêtez ce tricheur!";
            break;
                    }

   ?>
     <br><br>
   <a href="formulaireswitch.php">Retour</a>

</body>
</html>
