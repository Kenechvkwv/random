<?php
class food
{
    public $name;
    public $taste;
   
    //creating functions
    public function __construct($name, $taste)
    {
        $this->name = $name;
        $this->taste = $taste;
    }
    public function __destruct()
    {
        
        echo $this->name. " tastes ". $this->taste. "<br/>";
    }
}

$riceAndStew = new food('rice and stew','delicious'); //rice and stew tastes delicious
$bitterLeafSoup = new food('Bitter Leaf Soup', 'rich and tasty')//Bitter Leaf Soup tastes rich and tasty
?>