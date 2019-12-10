<?php
  $page = 'Exercice 1';
  include '../header.php';
  $thereturn = false;
    function bobol(){
    $thereturn = true;
    echo $thereturn;
    }
?>
<p><?php bobol(); ?></p>
<?php include '../footer.php'; ?>
