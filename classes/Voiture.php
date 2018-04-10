<?php
/**
 * Created by PhpStorm.
 * User: Stereo
 * Date: 10/04/2018
 * Time: 09:31
 */

class Voiture
{
    public $couleur;
    public $masse;
    public $marque;
    public $puissance;

    public function __construct($couleur, $masse, $marque, $puissance)
    {
        $this -> couleur = $couleur;
        $this -> masse = $masse;
        $this -> marque = $marque;
        $this -> puissance = $puissance;
    }

    public function demarrer()
    {
        $message = "La voiture a demarré";
        return $message;
    }
}