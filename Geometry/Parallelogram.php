<?php 
// require("Shape.php");
class Parallelogram extends Shape implements ICalculate{
    public $height;
    public $width;
    public $side;

    // $name->setName("Square");
    public function __construct($array = [])
    {
        parent::__construct($array["name"]);
        $this->height = $array["height"];
        $this->width = $array["width"];
        $this->side = $array["side"];
    }
    
    public function show()
    {
        echo "I am a " . $this->getName();
    }
    public function calculateArea()
    {
        return $this->height * $this->width;
    }
    public function calculatePerimeter( ) {
        return ($this->width + $this->side) * 2;
    }
    
}
?>