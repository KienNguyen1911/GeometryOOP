<?php 
// require("Shape.php");
class Triangle extends Shape implements ICalculate{
    private $sideOne;
    private $sideTwo;
    private $sideThree;
    
    // $name->setName("Square");
    public function __construct($array = [])
    {
        parent::__construct($array["name"]);
        $this->sideOne = $array["sideOne"];
        $this->sideTwo = $array["sideTwo"];
        $this->sideThree = $array["sideThree"];
    }
    
    public function show()
    {
        echo "I am a " . $this->getName();
    }

    public function checkShape() {
        if ($this->sideOne + $this->sideTwo <= $this->sideThree || $this->sideOne + $this->sideThree <= $this->sideTwo || $this->sideTwo + $this->sideThree <= $this->sideOne) {
            return "Sum of 2 sides must be larger than the third side";
        }
    }

    public function calculateArea()
    {

        $p = ($this->sideOne + $this->sideTwo + $this->sideThree) / 2;
        return sqrt($p * ($p - $this->sideOne) * ($p - $this->sideTwo) * ($p - $this->sideThree));
    }

    public function calculatePerimeter()
    {
        return $this->sideOne + $this->sideTwo + $this->sideThree;
    }

    /**
     * Get the value of sideOne
     */
    public function getSideOne()
    {
        return $this->sideOne;
    }

    /**
     * Set the value of sideOne
     */
    public function setSideOne($sideOne): self
    {
        $this->sideOne = $sideOne;

        return $this;
    }

    /**
     * Get the value of sideTwo
     */
    public function getSideTwo()
    {
        return $this->sideTwo;
    }

    /**
     * Set the value of sideTwo
     */
    public function setSideTwo($sideTwo): self
    {
        $this->sideTwo = $sideTwo;

        return $this;
    }

    /**
     * Get the value of sideThree
     */
    public function getSideThree()
    {
        return $this->sideThree;
    }

    /**
     * Set the value of sideThree
     */
    public function setSideThree($sideThree): self
    {
        $this->sideThree = $sideThree;

        return $this;
    }
}
?>