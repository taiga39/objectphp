<?php
require_once('Data.php');

class Item{
    
    protected $price;

    public function __construct($id){
        // $this->$price = ITEMDATA[$id]["price"];
        $this->$price = ITEMDATA[$id]["price"];

    }
    
    public function calcPrice($n){
        $price = $this->$price;
        $sum = $price * $n;
        return intval($sum);
    }
}