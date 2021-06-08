<?php

require_once 'bradeu.php';

class Particulier extends Bradeu {

    private $nom;

    function __construct($num, $surf, $nom){
        parent::__construct($num, $surf);
        $this->nom = $nom;
    }
    function afficheInfos(){
        $str =  "Nom : <span class='text-white bg-dark'>$this->nom</span><br>";
        $str .=  parent::afficheInfos().'<br>';   
        return $str;  
    }
}