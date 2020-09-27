<?php
require_once('Data.php');

class Item{
    
    protected $price;
    protected $tax;


    public function __construct($id){
        // $this->$price = ITEMDATA[$id]["price"];
        $this->price = ITEMDATA[$id]["price"];
        $this->tax = ITEMDATA[$id]["tax"];

    }
    public function getPrice(){
        return $this->price;
    }

    public function getTax(){
        return $this->tax;
    }

    public function calcPrice($n){
        $price = $this->getPrice();
        $tax = $this->getTax();
        $sum = $price * $n * $tax;
        return intval($sum);
    }
}