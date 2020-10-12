<?php
require_once('Item.php');
require_once('Cart.php');

class Saving {

    function calcAppleSaving($amount){
        $save = $amount / 3;
        $save = floor($save) * 20;
        return intval($save);
    }

    function omake($amount){
        $omake = floor(($amount-1) /10);
        $amount = $amount - $omake;
        return intval($amount);
    }

    function calcSave($items){
        $idarr = array_column($items, 'id');
        $amountarr = array_column($items, 'amount');

        $result_apple = array_search(1, $idarr);
        $result_tabacco = array_search(6, $idarr);
        $result_mint_tabacco = array_search(7, $idarr);
        $result_lighter = array_search(8, $idarr);
    
        if(is_int($result_apple) && $items[$result_apple]["amount"] >= 3){
            $amount = $items[$result_apple]["amount"];
            $save = $this->calcAppleSaving($amount);
            $items[$result_apple]["save"] = $save;
        }

        foreach($amountarr as $index => $amount){
            $amount = $this->omake($amount);
            $items[$index]["amount"] = $amount;
        }

        if((is_int($result_tabacco) || is_int($result_mint_tabacco) ) && is_int($result_lighter)){
            $count = floor($items[$result_tabacco]["amount"] /10);
            $items[$result_lighter]["amount"] = $items[$result_lighter]["amount"] - $count;
        }

        return $items;
    }
}

?>