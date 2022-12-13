<?php

    require_once __DIR__ . "/Product.php";

    Class Food extends Product {

        public $weight;

        public function __construct(String $name, String $color, Float $price, Float $weight) {
            parent::__construct($name, $color, $price);
            $this->weight = $weight;
            
        }

        public function getWeight() {

            return $this->weight;

        }
        


    }



?>