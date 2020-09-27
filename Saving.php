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

    function omakeLighter($items){
        $idarr = array_column($items, 'id');
        $result_tabacco = array_search(6, $idarr);
        $result_lighter = array_search(8, $idarr);
    
        if(is_int($result_tabacco) && is_int($result_lighter)){
            unset($items[$result_lighter]);
            $items = array_values($items);
        }
        return $items;
    }
}

?>