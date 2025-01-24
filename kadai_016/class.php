<?php

Class Food{
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price=$price;
    }

    public function show_price($food){
        echo $this->price;
    }
}

class Animal{
    public $name;
    public $height;
    public $weight;
    
    public function __construct($name,$height,$weight) {
        $this->name = $name;
        $this->height=$height;
        $this->weight=$weight;
    }
    public function show_height($animal){
        echo $this->height;
    }
}

$apple =new Food('リンゴ',300);
$cat =new Animal('cat',1,2);
print_r($apple);
echo '<br>';
print_r($cat);

echo '<br>';
$cat->show_height($cat);
echo '<br>';
$apple->show_price($apple);

?>