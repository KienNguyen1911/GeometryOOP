<?php 
// require("Shape.php");
// require_once "./Interface/ICalculate.php";
// include_once("./Interface/ICalculate.php");
class Square extends Shape implements ICalculate{
    public $side;
    // $name->setName("Square");
    public function __construct($name, $side)
    {
        parent::__construct($name);
        $this->side = $side;
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