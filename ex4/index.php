<?php include '../header.php';
$page = 'Exercice 4';
  function Numbers()
  {
    $nmbr = 8;
    $nmbrtwo = 7;
    if ($nmbr > $nmbrtwo) {
      echo 'le premier nombre est plus grand';
    }
    elseif ($nmbr < $nmbrtwo) {
      echo 'le premier nombre est plus petit';
    }
    else {
      echo 'les deux nombres sont identiques';
    }
  }
?>
<h1><?php Numbers(); ?></h1>
<?php include '../footer.php'; ?>
