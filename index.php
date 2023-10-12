<?php
  const NAME = 'Dupont';
  const SOLDE = 1000;

  
  $compte1 = new CompteBancaire ('Duchemol', 800);   
  echo $compte1->depot(350);
  echo "<br>";
  echo $compte1->retrait(200);
  echo"<br>";
  echo $compte1->affiche();

  echo "<br>"; 
  echo "<br>";
  $compte2 = new CompteBancaire (NAME, SOLDE);
  echo $compte2->depot(25);
  echo"<br>";
  echo $compte2->affiche();?>
 