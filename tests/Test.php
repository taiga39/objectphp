<?php

require_once('vendor/autoload.php');

require_once('Cart.php');
use PHPUnit\Framework\TestCase;

class TestOne extends TestCase {
    private $cart;

    /**
     * テスト前に呼び出される初期化メソッド
     */
    public function setUp(): void
    {
        $this->cart = new Cart();
    }
    function testCalcItemPrice(){
        $items = ["id" => 1,"amount" => 3];
        $answer = 330;
        $this->assertSame($answer,$this->cart->calcItemPrice($items));
    }

    function testCalcPrice(){
        $items = [
            ["id" => 1,"amount" => 3],
            ["id" => 2,"amount" => 5]
        ];
        $answer = 550;
        $this->assertSame($answer,$this->cart->calcPrice($items));
    }

    function testたばこを含んだ合計金額のテスト(){
        $items = [
            ["id" => 1,"amount" => 3],
            ["id" => 6,"amount" => 5]
        ];
        $answer = 2430;
        $this->assertSame($answer,$this->cart->calcPrice($items));
    }
}
