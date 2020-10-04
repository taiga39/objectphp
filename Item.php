<?php
require_once('Data.php');
require_once('Saving.php');


class Item{
    protected $id;
    protected $price;
    protected $tax;
    protected $amount;
    protected $save = 0;

    public function __construct($item){
        $this->id = $item["id"];
        $this->price = ITEMDATA[$item["id"]]["price"];
        $this->tax = ITEMDATA[$item["id"]]["tax"];
        $this->amount = $item["amount"];
        $this->save = $item["save"];
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

    public function calcPrice(){
        $price = $this->getPrice();
        $tax = $this->getTax();
        $amount = $this->getAmount();
        $save = $this->getSave();
        $sum = ($price * $amount - $save) * $tax;
        return intval($sum);

    }
}