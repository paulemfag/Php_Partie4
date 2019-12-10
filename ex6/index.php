<?php
include '../header.php';
$page = 'Exercice 6';
?>
<?php
  function Functioncoordonates()
  {
    $firstName = 'Paul-Emmanuel';
    $lastName = 'Fagot';
    $age = 18;
    echo 'Bonjour' .' ' .$lastName. ' ' .$firstName. ', tu as ' .$age. ' ans.';
  }
?>
<p><?php Functioncoordonates(); ?></p>
<?php
include '../footer.php';
?>
