<?php

    require_once __DIR__ . "/Product.php";

    Class Game extends Product {

        public $material;

        public function __construct(String $name, String $color, Float $price, String $material) {
            parent::__construct($name, $color, $price);
            $this->material = $material;
            
        }

        public function getMaterial() {

            return $this->material;

        }
        


    }



?>