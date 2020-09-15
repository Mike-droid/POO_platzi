<?php
    require_once 'Car.php';
    require_once 'uberX.php';
    require_once 'uberPool.php';
    require_once 'Account.php';

    // $car = new Car("AWQ319" , new Account("Miguel Reyes" , "REM2210"));
    // $car->printDataCar();

    $uberX = new uberX("CVB123", new Account("Andres Herrera","AND456"), "Chevrolet", "Spark");
    $uberX->printDataCar();

    $uberPool = new uberPool("FCV321", new Account("Miguel Reyes", "REM2210") , "Nissan", "Sentra");
    $uberPool->printDataCar();
?>