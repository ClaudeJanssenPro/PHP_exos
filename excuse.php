<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="excuse_style.css">
  <title>Générateur d'excuses - Formulaire</title>
</head>
<body>
   <form action="excuse_get.php"  method="get">
            Nom de l'institutrice ? : <input type="text" name="teachersname"><br><br>
            Nom de l'enfant ? : <input type="text" name="kidsname"><br><br>
      Raison de l'absence ? :
      <ul>
        <li ><input type="radio" name="motive"  <?php if (isset($motive) && $genre=="ill") echo "checked";?>
         value="ill">Malade</li>
         <li><input type="radio" name="motive" <?php if (isset($motive) && $genre=="petsdcd") echo "checked";?>
         value="petsdcd">Décès de l'animal de compagnie</li>
         <li><input type="radio" name="motive" <?php if (isset($motive) && $genre=="xtra") echo "checked";?>
         value="xtra">Activité extra-scolaire importante</li>
         <li><input type="radio" name="motive" <?php if (isset($motive) && $genre=="other") echo "checked";?>
         value="other">Autre</li>
      </ul>
       <br>
       <br>
       <br>
     <br>
   <input type="submit" name="submit" value="Envoyer">
   </form>

   </body>
   </html>

   <!-- Il te faut un formulaire avec trois questions:

       nom de l'enfant
       nom de l'institutrice
       une raison de l'absence à choisir parmi des options (input de type "radio"):
           maladie
           décès de l'animal de compagnie (ou d'un membre de la famille)
           activité extra-scolaire importante
           toute autre excuse de ton choix

   Pour chaque option, invente une excuse adaptée en fonction de l'option choisie. Utilise une condition pour afficher la bonne excuse.

   Génère le mot d'excuse utilisant les trois réponses au formulaire.

   Le parent n'aura plus qu'à copier-coller la réponse pour rédiger sa lettre d'excuses.
   Critères de perfectionnement

       ajoute la date du jour (format "Day, le dd Month YYYY")
       ajoute la formule de politesse.
       pas de faute d'orthographe.
       UX soignée: en faire un vrai produit? ( CSS + typographie + logo ) -->
