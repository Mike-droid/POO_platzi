<?php
    require_once('Car.php');
    class uberPool extends Car {
        public $brand;
        public $model;

        public function __construct($license, $driver, $brand, $model) {
            parent::__construct($license, $driver); //!Esto es lo mismo que el super de java
            $this->brand = $brand;
            $this->model = $model;
        }
    }
?>