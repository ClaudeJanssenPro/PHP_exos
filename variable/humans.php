<?php
$mon_prenom = "Claude";
$mon_age = 38;
$question_faim = true;
$ma_couleur_des_yeux = "vert";
$famille= array(0 => 'Michel', 1 => 'Claudine', 2 => 'Claude', 3 => 'Fabian', 4 => 'Raphaël');
//
if( $temperature >= 15 ) {
// code à exécuter si la condition est TRUE
$vetement_du_jour = "T-shirt";
} else {
// code à exécuter si la condition est FALSE
$vetement_du_jour = "Pull-over";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hi!</title>
</head>
    <body>
      <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>


    </body>
</html>

<!-- if ( $age <= 12 AND $langue == "français" ) { ...
//if ($genre == 'femme'){

	// Ici, du code à exécuter si le genre est "femme"

	if ( $age <= 12 and $langue == "français" ) {
		// Ici, du code à exécuter si le genre est "femme",  que l'âge est inférieur à 13 et que la langue est "français"
		...
	} else{
		// Ici, du code à exécuter si le genre est "femme",  et que l'âge est supérieur à 13 ou que la langue n'est pas "français"
		...
	}

} else {
	// Ici, du code à exécuter si le genre n'est pas "femme"

	if ( $age <= 12 and $langue == "français" ) {
		// Ici, du code à exécuter si le genre n'est pas "femme", que l'âge est inférieur à 13 et que la langue est "français"
		...
	}
}
-->
