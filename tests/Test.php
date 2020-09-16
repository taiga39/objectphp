<?php

require_once('vendor/autoload.php');

use PHPUnit\Framework\TestCase;
 
class SampleTest extends TestCase {
    public function test_add() {
        $sample = new Sample\Sample();
        $this->assertEquals(10, $sample->Add(4, 6));
    }
 
    public function test_sub() {
        $sample = new Sample\Sample();
        $this->assertEquals(1, $sample->Sub(7, 6));
    }
}
