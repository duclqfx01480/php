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

    $lexus = new Car();
    
    $lexus->SetColor("Black");
    echo $lexus->GetColor() . "<br>";

    $teslaTruck = new Car();
    $teslaTruck->SetColor("Silver");
    echo $teslaTruck->GetColor() . "<br>";
    
    echo "Number of wheels of Lexus: " . $lexus->wheels . "<br>";
    echo "Number of wheels of Tesla Truck: " . $teslaTruck->wheels = 10 . "<br>";
    
    
    


?>