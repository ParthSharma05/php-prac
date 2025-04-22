<?php

    class Rectangle
    {
        // Declare  properties
        public $length = 10;
        public $width = 5;
        
        // Method to get the perimeter
        public function getPerimeter(){
            return (2 * ($this->length + $this->width));
        }
        
        // Method to get the area
        public function getArea(){
            return ($this->length * $this->width);
        }
    
        public function showResult(){
            echo "Length of Rectangle: " . $this->length . "\n";
echo"<br>";

            echo "Width of Rectangle: " . $this->width . "\n";
echo"<br>";

            echo "Perimeter of Rectangle: " . $this->getPerimeter() . "\n";
echo"<br>";

            echo "Area of Rectangle: " . $this->getArea() . "\n";
        }
    }


    
    $rec = new Rectangle;
    
    $rec->showResult();
echo"<br>";
echo "<br> This program is written and executed by Parth Sharma-2220100264";



?>