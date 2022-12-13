<?php

    require_once __DIR__ . "/Product.php";

    Class Kennel extends Product {

        public $width;

        public function __construct(String $name, String $color, Float $price, Float $width) {
            parent::__construct($name, $color, $price);
            $this->width = $width;
            
        }

        public function getwidth() {

            return $this->width;

        }
        


    }



?>