<?php

require_once('vendor/autoload.php');

require_once('Cart.php');
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {
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

}
