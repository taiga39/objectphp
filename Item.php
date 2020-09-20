<?php

abstract class Item{
    protected $price;

    public function getPrice(){
        return $this->price;
    }

    public function calcPrice($n){
        $price = $this->getPrice();
        return $price * $n;
    }
}