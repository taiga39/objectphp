<?php
require_once("Item.php");

class Tabacco extends Item {
    protected $price = 420;

    /**
     * 個数を渡すと、金額を返す
     * @param int 個数
     * @return int 合計金額
     */
    public function calcPrice($n){
        $price = $this->getPrice();

        $sum =  $price * $n;
        return intval($sum);
    }

}
?>