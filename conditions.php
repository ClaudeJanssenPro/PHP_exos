<?php
$chambre_est_sale = False;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Conditions</title>
</head>
    <body>
      <h1>
        <?php
      if( $chambre_est_sale == "True" ) {
        echo "Range ta chambre, on dirait la cage d'un bonobo!";
      } else {
         echo "Ta chambre est trop propre, vis un peu!";
       };
       ?>
      </h1>
    </body>
</html>
