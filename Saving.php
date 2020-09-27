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

    function lighterOmake($items){

    }
}

?>