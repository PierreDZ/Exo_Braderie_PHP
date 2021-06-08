<?php

require_once 'commercant.php';

class VendeurPro extends Commercant {

    private $nbreSalaries;

    function __construct($num, $surf, $nomEnt, $codeTva, $nbreSalaries){
        parent::__construct($num, $surf, $nomEnt, $codeTva);
        $this->nbreSalaries = $nbreSalaries;
    }
    function calcTaxe(){
        $taxe = parent::calcTaxe();
        $taxe += ceil($this->nbreSalaries/ self::GROUPE) * self::TAXE_SALARIES;
        return $taxe;
    }
    function afficheInfos(){
        $str = parent::afficheInfos();
        $str .= "Nombre de salariés : $this->nbreSalaries.<br>";
        return $str;
    }  
}