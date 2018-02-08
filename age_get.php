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
      if ( $_GET["age"] <= "12" ) {echo "Salut petit!";}
      elseif ( $_GET["age"] >= "12" && $_GET["age"] <= "18" ) {echo "Salut l'ado!";}
      elseif ( $_GET["age"] >= "18" && $_GET["age"] <= "115" ) {echo "Salut l'adulte!";}
      elseif ( $_GET["age"] > "115") {echo "Wow! Toujours vivant?";}
   ?>
</body>
</html>

<h1>
