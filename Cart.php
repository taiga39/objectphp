<?php

require_once('Item.php');

class Cart{

    /**
     * 商品番号と個数を渡すと、合計金額を計算する関数
     * @param int $items 商品番号,個数
     * @return int 金額
     */

    function calcItemPrice($items) {
        $item = new Item($items["id"]);
        $price = $item->calcPrice($items["amount"]);
        return $price;
    }

    /**
     * 商品番号と個数を渡すと、全商品の合計金額を計算する関数
     * @param int $items 商品番号,個数
     * @return int 金額
     */

    function calcPrice($items) {
        return 0;
    }

}
