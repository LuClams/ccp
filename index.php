<?php 
    echo rand(1, 1000);
?>
<br>

<?php
    $compte1 = new CompteBancaire ('Duchemol', 800);
    $compte1->affiche();
?>
<br>
<?php
    echo $compte1->depot(); 
  ?>
<br> 
<?php 
    $compte1->retrait();
    ?>
    <br> 
<?php
    $compte2 = new CompteBancaire ('Duchemol', 950);
    $compte2->affiche();?>

<br>
<?php
    echo $compte2->depot(); 
  ?>
<br> 
<?php 
    $compte2->retrait();
    ?>
    <br> 
<?php
    $compte3 = new CompteBancaire ('Duchemol', 1025);
    $compte3->affiche();?>

    <br>
    <?php
    echo $compte3->depot(); 
    ?>
    <br> 
<?php 
    $compte3->retrait();
 