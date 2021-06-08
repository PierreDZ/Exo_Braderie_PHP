<?php

require_once 'params.php';

abstract class Bradeu extends Params {

    private $numEmpl;
    private $surface;

    function __construct($num, $surf){
        $this->numEmpl = $num;
        $this->surface = $surf;
    }
    function calcTaxe(){
        return $this->surface * self::PRIX_M2;
    }
    function afficheInfos(){
        return "Emplacement N° : $this->numEmpl, Surface : $this->surface m².";
    }
}