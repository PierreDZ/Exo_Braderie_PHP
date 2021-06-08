<?php

require_once 'commercant.php';

class Restaurateur extends Commercant {

    private $nbreTables;
    private $hasAuvent;

    function __construct($num, $surf, $nomEnt, $codeTva, $nbeTables, $hasAuvent){
        parent::__construct($num, $surf, $nomEnt, $codeTva);
        $this->nbreTables = $nbeTables;
        $this->hasAuvent = $hasAuvent;        

    }
    function calcTaxe(){
        $taxe = parent::calcTaxe();
        $taxe += $this->nbreTables * self::TAXE_TABLE;
        $taxe += ($this->hasAuvent ? 1 : 0 ) * self::TAXE_AUVENT;
        return $taxe;
    }
    function afficheInfos(){        
        $str = parent::afficheInfos();        
        $str .= "Nombre de table : $this->nbreTables. Auvent : ( ".($this->hasAuvent ?'Oui':'Non') ." )<br>";
        return $str;
    }    
}