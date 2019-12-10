<?php
include '../header.php';
$page = 'Exercice 5';
  function Parameters()
  { $init = 5;
    $string = 'C\'est l\'Exercice ';
    echo $string . $init . '.';
  }
?>
<p><?php Parameters(); ?></p>
<?php
include '../footer.php';
?>
