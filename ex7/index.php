<?php
include '../header.php';
$page = 'Exercice 7';
  function Genderage($value='')
  { $age = 18;
    $gender = 'femme';
    if ($gender == 'homme' && $age >= 18) {
      echo 'Vous êtes un homme et vous êtes majeur.';
    }
    elseif ($gender == 'homme' && $age < 18) {
      echo 'Vous êtes un homme et vous êtes mineur.';
    }
    elseif ($gender == 'femme' && $age < 18) {
      echo 'Vous êtes une femme et vous êtes mineure.';
    }
    else {
      echo 'Vous êtes une femme et vous êtes majeure.';
    }
  }
?>
<p><?php Genderage(); ?></p>
<?php include '../footer.php'; ?>
