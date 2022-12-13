<?php

trait Utility
{



    public function GetTotal($shopBasket)
    {

        $totali =    array_map(function ($product) {
            return $product->price;
        }, $shopBasket);

        return array_sum($totali);
    }
}