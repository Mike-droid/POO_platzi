<?php
    require_once('Car.php');
    class uberVan extends Car {
        public $typeCarAccepted;
        public $seatsMaterial;

        public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial) {
            parent::__construct($license, $driver); //!Esto es lo mismo que el super de java
            $this->typeCarAccepted = $typeCarAccepted;
            $this->seatsMaterial = $seatsMaterial;
        }
    }
?>