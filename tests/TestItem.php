<?php

require_once('vendor/autoload.php');

require_once('Item.php');
use PHPUnit\Framework\TestCase;

class TestTwo extends TestCase {
    private $item;

    /**
     * テスト前に呼び出される初期化メソッド
     */
    public function setUp(): void
    {
        $this->item = new Item();
    }
    function testCalcItemPrice(){
        $items = [
            ["id" => 1,"amount" => 3]
        ];
        $answer = 300;
        $this->assertSame($answer,$this->cart->calcItemPrice($items));
    }

    function testCalcPrice(){
        $items = [
            ["id" => 1,"amount" => 3],
            ["id" => 2,"amount" => 5]
        ];
        $answer = 500;
        $this->assertSame($answer,$this->cart->calcPrice($items));
    }
}
