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


    public function depot ($depot) {
        $depot = rand(1, 10000);
        return $this->solde += $depot;
    }

    public function retrait ($retrait) {
        $retrait = rand(1, 10000);

        if($retrait > $this->solde) {
            echo "L'opération n'est pas possible";
        } else {

        }
        return $this->solde -= $retrait;
    }

    public function affiche () {
        return "Le solde du compte bancaire de $this->name est de $this->solde euros";
    }
}