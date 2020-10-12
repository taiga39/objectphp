<?php

require_once('Item.php');
require_once('Saving.php');

class Cart{
    protected $cart = array();
    /**
     * 商品番号と個数を渡すと、合計金額を計算する関数
     * @param int $items 商品番号,個数
     * @return int 金額
     */
    function setItem($items){
        $item = new Item($items["id"]);
        $item->setAmount($items["amount"]);
        array_push($this->cart,$item);
    }


    function calcItemPrice($item) {
        $price = $item->calcPrice();
        return $price;
    }
    
    function getCart(){
        return $this->cart;
    }
    /**
     * 商品番号と個数を渡すと、全商品の合計金額を計算する関数
     * @param int $items 商品番号,個数
     * @return int 金額
     */
    function calcPrice($items) {
        foreach($items as $item){
            $this->setItem($item);
        }

        $cart = $this->getCart();

        $sum = 0;
        foreach($cart as $item){
            $price = $this->calcItemPrice($item);
            $sum += $price;
        }
        
        $savesum = 0;
        $save = new Saving($cart);
        $savearr = $save->calcSave();

        foreach($savearr as $save){
            $saves = $save->getSave();
            $savesum += $saves;
        }
        return $sum - $savesum;
    }

}
