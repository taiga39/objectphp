<?php
require_once('Data.php');
require_once('Saving.php');


class Item{
    protected $id;
    protected $price;
    protected $tax;
    protected $amount;

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

    public function getAmount(){
        return $this->amount;
    }

    public function getSave(){
        return $this->save;
    }

    public function setAmount($n){
        $this->amount = $n;
    }
    public function calcPrice(){
        $price = $this->getPrice();
        $tax = $this->getTax();
        $amount = $this->getAmount();
        $sum = $price * $amount * $tax;
        return intval($sum);
    }
}