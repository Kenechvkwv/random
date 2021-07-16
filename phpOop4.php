<?php
class programmingLang
{
    public $name;
    public $usage;
    public $developer;
    //creating functions
    public function __construct($name, $usage, $developer)
    {
        $this->name = $name;
        $this->usage = $usage;
        $this->developer = $developer;
    }
    public function __destruct()
    {
        
        echo $this->name. " is usually used by ". $this->developer. " for ". $this->usage. " designs"."<br/>";
    }
}

$php = new programmingLang('php','backend','backend developers'); 
//php is usually used by backend developers for backend designs
$javascript = new programmingLang('javascript','frontend and backend','web developers');
//javascript is usually used by web developers for frontend and backend designs
?>