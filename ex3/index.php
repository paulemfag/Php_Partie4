<?php
include '../header.php';
$page = 'Exercice 3';
  $str1 = 'je m\'appelle ';
  $str2 = 'paul';
?>
<p><?= $str1 . $str2; ?></p>
<?php
function Mynameis()
{
  $str1 = 'Personne.';
  $str2 = 'Mon nom est ';
  echo $str2 . $str1;
}
?>
<p><?= Mynameis(); ?></p>
<?php include '../footer.php'; ?>
