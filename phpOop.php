<?php
//creating a Class
class cars{
    //creating it's properties(variables)
    public $colour="blue";
    public $speed=100;
    //creating it's method(functions)
    function get_colour() {
        return $this->colour;
    }
    function set_colour($colour) {
        $this->colour = $colour;
    }
    function get_speed() {
        return $this->speed;
    }
    function set_speed($speed) {
        $this->colour = $speed;
    }
    //All the above Methods are used in setting up the characteristics of the class cars
}

//now we create an object from the class above
$benz = new cars();
echo "The original colour of our benz is ".$benz->get_colour()."<br/>";
//now we set a new colour
$benz->set_colour('indigo');
echo "Our Benz's new colour is ". $benz->get_colour();
?>