<?php
class employee{
    public $firstName;
    public $lastName;
    public $age;
     //creating it's method(functions)
    public function __construct($firstName, $lastName, $age)
     {
       $this->firstName = $firstName;
       $this->lastName = $lastName;
       $this->age = $age;
     }

     function get_firstName() {
        return $this->firstName;
    }
    function get_lastName() {
        return $this->lastName;
    }
    function get_age() {
        return $this->age;
    }
}
//now we create a new employee
$frontendDev = new employee('Irene', 'Williams', 24);
echo $frontendDev->get_firstName(); //Irene will be printed
echo "<br/>";
echo $frontendDev->get_lastName(); //Williams will be printed
echo "<br/>";
echo $frontendDev->get_age(); //24 will be printed
?>
