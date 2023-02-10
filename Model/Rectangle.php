<?php 
// require("Shape.php");
class Rectangle extends Shape implements ICalculate{
    public $side;
    public $width;
    public function __construct($name, $side, $width)
    {
        parent::__construct($name);
        $this->side = $side;
        $this->width = $width;
    }
    public function show()
    {
        echo "I am a " . $this->getName();
    }
    public function calculateArea()
    {
        return $this->side * $this->width;
    }
    public function calculatePerimeter()
    {
        return 2 * ($this->side + $this->width);
    }

}

?>