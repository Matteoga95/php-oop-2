<?php

class Type
{
    public string $type;
    public $discount;
    public $promo;
    public string $price;

    //in base al tipo di prodotto,cibo cuccie gatti etc etc
    //  si potranno effettuare relative operazioni 
    //magari inerenti al prezzo che cambia in base al tipo o ad una promozione
    public function __construct($type, $price)
    {
        $this->type = $type;
        $this->price = $price;
    }
}