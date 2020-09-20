<?php

require_once('vendor/autoload.php');

require_once('Item.php');
require_once('Tabacco.php');

use PHPUnit\Framework\TestCase;

class TestTabacco extends TestCase {
    private $item;
    public function setUp(): void
    {
        $this->item= new Tabacco();
    }

    function testcalcPrice(){
        $n = 5;
        $answer = 2100;
        $this->assertSame($answer, $this->item->calcPrice($n));
    }
}
