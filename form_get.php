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
  if ($_GET["english"] == "yes") {
      if ( $_GET["age"] <= "12" && $_GET["genre"] == "ho" ) {echo "Hello boy!";}
        elseif ( $_GET["age"] <= "12"  && $_GET["genre"] == "fe" ) {echo "Hello Girl!";}
        elseif ( $_GET["age"] >= "12" && $_GET["age"] <= "18"  &&  $_GET["genre"] == "ho" ) {echo "Hello Teenage boy!";}
        elseif ( $_GET["age"] >= "12" && $_GET["age"] <= "18"  &&  $_GET["genre"] == "fe" ) {echo "Hello Teenage girl!";}
        elseif ( $_GET["age"] >= "18" && $_GET["age"] <= "115"  &&  $_GET["genre"] == "ho"  ) {echo "Hello Sir!";}
        elseif ( $_GET["age"] >= "18" && $_GET["age"] <= "115"  &&  $_GET["genre"] == "fe" ) {echo "Hello Lady!";}
        elseif ( $_GET["age"] > "115"  &&  $_GET["genre"] == "ho"  ) {echo "Wow! Still alive, old man?";}
        elseif ( $_GET["age"] > "115"  &&  $_GET["genre"] == "fe"  ) {echo "Wow! Still alive, old lady?";}
  } else {
    if ( $_GET["age"] <= "12" && $_GET["genre"] == "ho" ) {echo "Salut petit!";}
      elseif ( $_GET["age"] <= "12"  && $_GET["genre"] == "fe" ) {echo "Salut petite!";}
      elseif ( $_GET["age"] >= "12" && $_GET["age"] <= "18"  &&  $_GET["genre"] == "ho" ) {echo "Salut l'ado!";}
      elseif ( $_GET["age"] >= "12" && $_GET["age"] <= "18"  &&  $_GET["genre"] == "fe" ) {echo "Salut l'adolescente!";}
      elseif ( $_GET["age"] >= "18" && $_GET["age"] <= "115"  &&  $_GET["genre"] == "ho"  ) {echo "Salut monsieur!";}
      elseif ( $_GET["age"] >= "18" && $_GET["age"] <= "115"  &&  $_GET["genre"] == "fe" ) {echo "Salut madame!";}
      elseif ( $_GET["age"] > "115"  &&  $_GET["genre"] == "ho"  ) {echo "Wow! Toujours vivant?";}
      elseif ( $_GET["age"] > "115"  &&  $_GET["genre"] == "fe"  ) {echo "Wow! Toujours vivante?";}
  }
   ?>
     <br><br>
   <a href="formulaire01.php">Retour</a>

</body>
</html>
