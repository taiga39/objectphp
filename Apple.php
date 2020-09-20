<?php

require_once('Item.php');

class Apple extends Item {
    protected $price = 100;
    protected $discount = 20;


    private function getDiscount(){
        return $this->discount;
    }

    private function calcDiscount($n){
        $discount = floor($n/3) * $this->getDiscount();
        return $discount;
    }

    /**
     * 個数を渡すと、金額を返す。３つごとに20円引き
     * @param int 個数
     * @return int 合計金額
     */
    public function calcPrice($n){
        $price = $this->getPrice();
        $discount = $this->calcDiscount($n);
        $tax = $this->getTax();
        $sum =  ($price * $n - $discount) * $tax;
        return intval($sum);
    }
}