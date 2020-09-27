<?php

require_once('vendor/autoload.php');
require_once('Item.php');

use PHPUnit\Framework\TestCase;

class TestItem extends TestCase {
    private $item;

    function testりんごは３つで割引が適用される(){
        $this->item = new Item(1);
        $amount = 5;
        $answer = 528;
        $this->assertSame($answer,$this->item->calcPrice($amount));
    }

    function test商品の個数を入れると金額を返すテストたばこ(){
        $this->item = new Item(6);
        $amount = 2;
        $answer = 840;
        $this->assertSame($answer,$this->item->calcPrice($amount));
    }

    function test１０個以上ならひとつおまけがつくテスト(){
        $this->item = new Item(2);
        $amount = 11;
        $answer = 440;
        $this->assertSame($answer,$this->item->calcPrice($amount));
        
    }

    function test２０個みかんを買うとおまけがつくテスト(){
        $this->item = new Item(2);
        $amount = 20;
        $answer = 836;
        $this->assertSame($answer,$this->item->calcPrice($amount));
        
    }
}
