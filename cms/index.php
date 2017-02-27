<?php

require 'functions.php';

$nesto = ['jedan', 'dva', 'tri'];


class User {


    protected $name;
    public $lastname;

    public function __construct($name, $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function punoime() {
        echo $this->name . " " . $this->lastname;
    }

}

class AdvUser extends User {
    public function punoime() {
        echo $this->lastname . ", " . $this->name;
    }
}

$zika = new AdvUser("zika", 'petrovic');
//$zika->name = "Marko";
$zika->punoime();
//echo $this->name;
//$zika->lastname = "Petrovic";
//$zika->punoime();
////dd($zika);


require 'index.view.php';