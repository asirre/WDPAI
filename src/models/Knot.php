<?php

class Knot {

    private $name;
    private $description;
    private $image;

    public function __construct($name,$description, $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}