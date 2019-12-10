<?php
include '../header.php';
$page = 'Exercice 2';
  $string = '';
    function callme()
    {
      $string = 'ceci est une chaine de caractères';
      echo $string;
    }
?>
<p><?php callme(); ?></p>
<?php include '../footer.php'; ?>
