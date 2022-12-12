<?php

require_once __DIR__ . '/category.php';
require __DIR__ . '/type.php';


class product extends Type
{

    public string $title;
    public string $img;
    public $icon;



    public function __construct($type, $price, $title, $img, Category $icon)
    {
        $this->type = $type;
        $this->price = $price;
        $this->title = $title;
        $this->img = $img;
        $this->icon = $icon;
    }
}
