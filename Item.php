<?php

abstract class Item{
    protected $price;
    protected $tax = 1.1;


    public function getPrice(){
        return $this->price;
    }

    public function getTax(){
        return $this->tax;
    }

    
    public function calcPrice($n){
        $price = $this->getPrice();
        $tax = $this->getTax();

        $sum =  $price * $n * $tax;
        return intval($sum);
    }
}