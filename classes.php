<?php

class Person {
    public $name;
    public $years;
    public $country;

    function __construct($name, $years, $country){
        $this->name = $name;
        $this->years = $years;
        $this->country = $country;
    }
    public function talk ($saludo){
        return $this->name .' says '. $saludo .'<br>';
    }
    
    public function infoShow (){
        return $this->name . ' is ' . $this->years . ' years old and lives in ' 
        . $this->country .'<br>';
    }
}

class Student extends Person {
    function __construct($name, $years, $country, $career){
        parent::__construct($name, $years, $country); //retrieve previous propierties
        $this->career = $career;
    }

    public function infoCarrer(){
        return $this->name. ' studies '. $this->career;
    }
}

$Alex = new Person ('Anselmo',55,'Spain');
$Jose = new Student ('Jose',45, 'Spain','Engineer');

echo $Jose->infoShow();
echo $Jose->talk('Epa!');
echo $Alex->infoShow();
echo $Alex->talk('Hi!');
echo $Jose->infoCarrer();

?>