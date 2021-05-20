<?php
    class Car{
        // Properties
        static $wheels = 4;
        var $hood = 1;


        // Methods
        function MoveWheels(){
            echo Car::$wheels = 10;
        }

    }

    $bmw = new Car();   
    echo Car::$wheels;

    $bmw->MoveWheels();
    
?>