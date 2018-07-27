<?php
  $age = 26;
  $gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3/2</title>
  </head>
  <body>
    <?php
      if ($age >= 18 AND $gender == 'Femme') {
        echo 'Vous êtes une femme et vous êtes majeur';
      } elseif ($age <= 18 AND $gender == 'Femme') {
        echo 'Vous êtes une femme et vous êtes mineur';
      } elseif ($age >= 18 AND $gender == 'Homme') {
        echo 'Vous êtes un homme et vous êtes majeur';
      } elseif ($age <= 18 AND $gender == 'Homme') {
        echo 'Vous êtes un homme et vous êtes mineur';
      }
    ?>
  </body>
</html>
