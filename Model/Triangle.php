<?php 
// require("Shape.php");
class Triangle extends Shape implements ICalculate{
    private $side1;
    private $side2;
    private $side3;
    
    // $name->setName("Square");
    public function __construct($name, $side1, $side2, $side3)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    
    public function show()
    {
        echo "I am a " . $this->getName();
    }

    public function calculateArea()
    {
        $p = ($this->side1 + $this->side2 + $this->side3) / 2;
        return sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3));
    }

    public function calculatePerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    /**
     * Get the value of side1
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * Set the value of side1
     */
    public function setSide1($side1): self
    {
        $this->side1 = $side1;

        return $this;
    }

    /**
     * Get the value of side2
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * Set the value of side2
     */
    public function setSide2($side2): self
    {
        $this->side2 = $side2;

        return $this;
    }

    /**
     * Get the value of side3
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * Set the value of side3
     */
    public function setSide3($side3): self
    {
        $this->side3 = $side3;

        return $this;
    }
}
?>