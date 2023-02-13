<?php 
// require("Shape.php");
class Rectangle extends Shape implements ICalculate{
    public $height;
    public $width;
    public function __construct($array = [])
    {
        parent::__construct($array["name"]);
        $this->height = $array["height"];
        $this->width = $array["width"];
    }
    
    public function show()
    {
        echo "I am a " . $this->getName();
    }

    public function checkShape() {
        if ($this->height < 0 && $this->width < 0) {
            return "Height and width must be larger than 0";
        }
    }
    public function calculateArea()
    {
        return $this->height * $this->width;
    }
    public function calculatePerimeter()
    {
        return 2 * ($this->height + $this->width);
    }

}

?>