<?php

class Category
{
    public string $icon;

    public function __construct($isDog)
    {
        //mi passo al costruttore se è cane o no e in base a questo setto l'icona giusta da usare
        if ($isDog == true) {

            $this->icon = "/icona cane.png";
        } else {
            $this->icon = "/gatto ico.jpg";
        }
    }
}
