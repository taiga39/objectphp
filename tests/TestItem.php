<?php

require_once('vendor/autoload.php');
require_once('Item.php');

use PHPUnit\Framework\TestCase;

class TestItem extends TestCase {
    private $item;

    /**
     * テスト前に呼び出される初期化メソッド
     */
    // public function setUp(): void
    // {
    //     $this->item = new Item(1);
    // }

    function test商品の個数を入れると金額を返すテストりんご(){
        $this->item = new Item(1);
        $amount = 5;
        $answer = 550;
        $this->assertSame($answer,$this->item->calcPrice($amount));
    }

    function test商品の個数を入れると金額を返すテストたばこ(){
        $this->item = new Item(6);
        $amount = 2;
        $answer = 840;
        $this->assertSame($answer,$this->item->calcPrice($amount));
    }
}
