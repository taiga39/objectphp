<?php

require_once('Item.php');
require_once('Apple.php');
class Cart{

    /**
     * 商品番号を渡すと、1個あたりの金額を計算する関数
     * @param int $itemId 商品番号
     * @return int 金額
     */
    function calcItemPrice($itemId){
        $apple = new Apple();
        return $apple->getPrice();
    }

}
