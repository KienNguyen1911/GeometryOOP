<?php 
// require("Shape.php");
require "./Interface/ICalculate.php";

class Square extends Shape implements ICalculate{
    public $side;
    // $name->setName("Square");
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function show()
    {
        echo "I am a " . $this->getName();
    }

    public function calculateArea()
    {
        return $this->side * $this->side;
    }

    public function calculatePerimeter()
    {
        return 4 * $this->side;
    }

}
?>