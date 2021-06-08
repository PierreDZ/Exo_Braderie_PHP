<?php

require_once 'bradeu.php';

abstract class Commercant extends Bradeu {

private $nomEnt;
private $codeTva;

function __construct($num, $surf, $nomEnt, $codeTva){
    parent::__construct($num, $surf);
    $this->nomEnt = $nomEnt;
    $this->codeTva = $codeTva;
}
function afficheInfos(){
    $str = "Entreprise : <span class='text-white bg-dark'>".$this->nomEnt."</span>. CodeTVA : ".$this->codeTva."<br>";
    $str .= parent::afficheInfos().'<br>';
    return $str;
}
}