<?php
    class Car{
        // Properties

        // Methods
        function MoveWheels(){
            echo "Wheels move";
        }
    }

    // if(class_exists("Car")){
    //     echo "The class existed";
    // }else{
    //     echo "No";
    // }

    if(method_exists("Car", "MoveWheels")){
        echo "The method exists inside the class";
    }else{
        echo "Not yet existed";
    }


?>