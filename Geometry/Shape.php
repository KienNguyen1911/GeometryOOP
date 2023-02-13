<?php
abstract class Shape {
    private $name;
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    // abstract public function ();
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function show();
}