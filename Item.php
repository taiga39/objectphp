<?php
require_once('Data.php');
require_once('Saving.php');


class Item{
    protected $id;
    protected $price;
    protected $tax;

    public function __construct($id){
        $this->id = $id;
        $this->price = ITEMDATA[$id]["price"];
        $this->tax = ITEMDATA[$id]["tax"];
    }

    public function getId(){
        return $this->id;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getTax(){
        return $this->tax;
    }

    public function calcPrice($n){
        $id = $this->getId();
        if($id === 1){
            $save = new Saving();
            $savesum = $save->calcAppleSaving($n);   
        }
        $price = $this->getPrice();
        $tax = $this->getTax();
        $sum = ($price * $n -$savesum) * $tax;
        return intval($sum);
    }
}