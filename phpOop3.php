<?php
class fruits{
    public $name;
    public $colour;
    //creating functions
    public function __construct($name, $colour)
    {
        $this->name = $name;
        $this->colour = $colour;
    }
    public function __destruct(){
        echo "The name of this fruit is ". $this->name ." and the colour is ". $this->colour;
    }
    function getName(){
        return $this->name;
    }
    function getColour(){
        return $this->colour;
    }
}

$guava = new fruits('guava','green');
//this automatically echoes : "The name of this fruit is guava and the colour is green"
?>