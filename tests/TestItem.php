<?php

require_once('vendor/autoload.php');
require_once('Item.php');

use PHPUnit\Framework\TestCase;

class TestItem extends TestCase {
    private $item;

    /**
     * テスト前に呼び出される初期化メソッド
     */
    public function setUp(): void
    {
        $this->item = new Item(1);
    }
    function testCalcItemPrice(){
        $amount = 5;
        $answer = 500;
        $this->assertSame($answer,$this->item->calcPrice($amount));
    }
}
