<?php
include '../header.php';
$page = 'Exercice 8';
  function addition(){
    $myArray = [1, 2, 3];
    echo 'la somme des valeurs est ' . array_sum($myArray);
  };
?>
<p><?= addition(); ?></p>
<?php include '../footer.php'; ?>
