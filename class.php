<?php

class Apple{
    public $price = 150;
    public function __construct($count) {
        $this->count = $count;
    }
    public function cal() {
        return $this->count * $this->price;
    }
}

$apple = new Apple(4);

echo $apple->cal();

?>