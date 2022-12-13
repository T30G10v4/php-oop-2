<?php 
class Product {

    public $name;
    public $color;
    public $price;

    function __construct(String $name, String $color, Float $price) {

        $this->$name = $name;
        $this->$color = $color;
        $this->$price = $price;

    }

    function getName() {

        return $this->$name;

    }

    function getcolor() {

        return $this->$color;

    }

    function getprice() {

        return $this->$price;

    }

}
?>