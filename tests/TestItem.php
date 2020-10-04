<?php

require_once('vendor/autoload.php');
require_once('Item.php');

use PHPUnit\Framework\TestCase;

class TestItem extends TestCase {
    private $item;

    function testりんごは３つで割引が適用される(){
        $items = ["id"=>1,"amount"=>5,"save"=>20];
        $this->item = new Item($items);
        $answer = 528;
        $this->assertSame($answer,$this->item->calcPrice($this->item));
    }

    function test商品の個数を入れると金額を返すテストたばこ(){
        $items = ["id"=>6,"amount"=>2];
        $this->item = new Item($items);
        $answer = 840;
        $this->assertSame($answer,$this->item->calcPrice($this->item));
    }
}
