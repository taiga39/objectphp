<?php

require_once('vendor/autoload.php');

require_once('Item.php');
require_once('Apple.php');

use PHPUnit\Framework\TestCase;

class TestItem extends TestCase {
    private $item;
    public function setUp(): void
    {
        $this->item= new Apple();
    }

    function testItemPrice(){
        $answer = 100;
        $this->assertSame($answer, $this->item->getPrice());
    }

    function testcalcPrice(){
        $n = 5;
        $answer = 500;
        $this->assertSame($answer, $this->item->calcPrice($n));
    }
}
