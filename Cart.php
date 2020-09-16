<?php

require_once('Item.php');
require_once('Apple.php');
require_once('Orange.php');

class Cart{

    private $items = [
        "Apple",
        "Orange"
    ];

    /**
     * 商品番号を渡すと、1個あたりの金額を計算する関数
     * @param int $itemId 商品番号
     * @return int 金額
     */

    function calcItemPrice($itemId) {

        $className = $this->items[$itemId-1];
        $apple = new $className();
        return $apple->getPrice();
    }

    /**
     * 商品番号を複数渡す場合
     * @param array $itemIds 商品番号
     * @return int 金額の合計値
     */
    function calcItemsPrice($itemIds){
        $sum = 0;
        foreach($itemIds as $id){
            $sum += $this->calcItemPrice($id);
        }
        return $sum;
    }

    /**
     * 商品番号と商品数を複数渡して、合計金額
     * @param array 商品番号 個数
     * @return int 金額
     */
    function calcPrice($items){
        $sum = 0;
        foreach($items as $item){
            $sum += $this->calcItemPrice($item["id"]) * $item["amount"];
        }
        return $sum;
    }
}
