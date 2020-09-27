<?php

require_once('vendor/autoload.php');

require_once('Saving.php');
use PHPUnit\Framework\TestCase;

class TestSaving extends TestCase {
    private $saving;

    /**
     * テスト前に呼び出される初期化メソッド
     */
    public function setUp(): void
    {
        $this->saving = new Saving();
    }

    function testりんごの割引金額を返す(){
        $amount = 7;
        $answer = 40;
        $this->assertSame($answer,$this->saving->calcAppleSaving($amount));
    }

}