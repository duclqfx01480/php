<?php
    class Car{
        // Properties
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;
        var $color = "";

        // Methods
        function MoveWheels(){
            echo "Wheels move<br>";
        }

        function SetColor($color){
            $this->color = $color;
        }
        function GetColor(){
            return $this->color;
        }
    }

    class Plane extends Car{
    }

    $jet = new Plane();
    $jet->MoveWheels();
    echo $jet->wheels;
    
    


?>