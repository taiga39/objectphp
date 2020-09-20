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

    function testCalcItemPrice() {
        $itemId = 1;
        $answer = 100;
        $this->assertSame($answer, $this->cart->calcItemPrice( $itemId ));

        $itemId = 2;
        $answer = 40;
        $this->assertSame($answer, $this->cart->calcItemPrice( $itemId ));
    }

    function testCalcItemsPrice(){
        $itemIds = [1,2];
        $answer = 140;
        $this->assertSame($answer,$this->cart->calcItemsPrice($itemIds));
    }

    function testCalcPrice(){
        $items = [
            ["id" => 1,"amount" => 3],
            ["id" => 2,"amount" => 5]
        ];
        $answer = 500;
        $this->assertSame($answer,$this->cart->calcPrice($items));
    }

    function testTaxPrice(){
        $items = [
            ["id"=>1,"amount"=>3],
            ["id"=>2,"amount"=>5],
        ];
        $answer = 550;
        $this->assertSame($answer,$this->cart->calcTaxPrice($items));
    }

    function testTaxPriceTabacco(){
        $items = [
            ["id"=>1,"amount"=>3],
            ["id"=>3,"amount"=>5]
        ];
        $answer = 2400;
        $this->assertSame($answer,$this->cart->calcTaxPriceTabacco($items));
    }
}
