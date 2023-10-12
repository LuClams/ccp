<?php

class CompteBancaire {
    private $name;
    private $solde;

    const NAME = 'Dupont';
    const SOLDE = 1000;

    public function __construct($name, $solde) { 
        $this->name = $name;
        $this->solde = $solde;
    }


    public function getSolde() {
        return $this->solde;
    }

    public function setSolde($solde) {
        $this->solde = $solde;
    }

    public function getNom() {
        return $this->name;
    }

    public function setNom($name) {
        $this->name = $name;
    }


    public function depot ($depot) {
        
        echo $this->solde += $depot;
    }

    public function retrait ($retrait) {

        if($retrait > $this->solde) {
            echo "L'opération n'est pas possible";
        } else {
          echo $this->solde -= $retrait;
        }
        
    }

    public function affiche () {
        echo "Le solde du compte bancaire de M./Mme $this->name est de $this->solde euros";
    }
}


