<?php

require_once('vendor/autoload.php');

require_once('Cart.php');
use PHPUnit\Framework\TestCase;

class Test extends TestCase {
    private $cart;

    /**
     * テスト前に呼び出される初期化メソッド
     */
    public function setUp(): void
    {
        $this->cart = new Cart();
    }
    function testCalcOnlyApplePrice(){
        $items = [
            ["id" => 1,"amount" => 3]
        ];
        $answer = 308;
        $this->assertSame($answer,$this->cart->calcPrice($items));
    }

    function testCalcPrice(){
        $items = [
            ["id" => 1,"amount" => 3],
            ["id" => 2,"amount" => 5]
        ];
        $answer = 528;
        $this->assertSame($answer,$this->cart->calcPrice($items));
    }

    function testたばこを含んだ合計金額のテスト(){
        $items = [
            ["id" => 1,"amount" => 3],
            ["id" => 6,"amount" => 5]
        ];
        $answer = 2408;
        $this->assertSame($answer,$this->cart->calcPrice($items));
    }

    function testおまけが付く合計金額のテスト(){
        $items = [
            ["id" => 1,"amount" => 2],
            ["id" => 2,"amount" => 11]
        ];
        $answer = 660;
        $this->assertSame($answer,$this->cart->calcPrice($items));
    }

    function testたばこを１０個買うと、ライターのおまけが付く合計金額のテスト(){
        $items = [
            ["id" => 6,"amount" => 10],
            ["id" => 8,"amount" => 1]
        ];
        $answer = 4200;
        $this->assertSame($answer,$this->cart->calcPrice($items));
    }

    function testメンソールたばこを１０個買うと、ライターが一個おまけで付く合計金額のテスト(){
        $items = [
            ["id" => 7,"amount" => 10],
            ["id" => 8,"amount" => 2]
        ];
        $answer = 4510;
        $this->assertSame($answer,$this->cart->calcPrice($items));
    }
}
