<?php
    $items = [
        ["id" => 6,"amount" => 10],
        ["id" => 8,"amount" => 1]
    ];

    $idarr = array_column($items, 'id');
    $result_tabacco = array_search(6, $idarr);
    $result_lighter = array_search(8, $idarr);

    if(is_int($result_tabacco) && is_int($result_lighter)){
        unset($items[$result_lighter]);
        $items = array_values($items);
    }
    var_dump($items);