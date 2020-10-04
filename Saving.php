<?php

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

    function savingCalc($items){
        $idarr = array_column($items, 'id');
        $amountarr = array_column($items, 'amount');

        $result_apple = array_search(1, $idarr);
        $result_tabacco = array_search(6, $idarr);
        $result_lighter = array_search(8, $idarr);
    
        if(is_int($result_apple) && $items[$result_apple]["amount"] > 2){
            $amount = $items[$result_apple]["amount"];
            $save = $this->calcAppleSaving($amount);
            $items[$result_apple]["save"] = $save;
        }

        foreach($amountarr as $index => $amount){
            $amount = $this->omake($amount);
            $items[$index]["amount"] = $amount;
        }

        if(is_int($result_tabacco) && is_int($result_lighter)){
            unset($items[$result_lighter]);
            $items = array_values($items);
        }

        return $items;
    }
}

?>