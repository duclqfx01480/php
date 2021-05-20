<?php
    class Car{
        // Properties
        public $wheels = 4;
        protected $hood = 1;
        private $engine = 1;
        var $doors = 4;

        // Methods
        function MoveWheels(){
            $this->wheels = 10;
        }

        function showProperty(){
            echo $this->engine;
        }

    }

    class Semi extends Car{
    }

    $bmw = new Car();
    $bmw->showProperty();
    
    $semi = new Semi();

    $semi->showProperty();

    
    


?>