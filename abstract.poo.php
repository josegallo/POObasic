<?php

// abstract clases methods can be used only on inherit classed
abstract class Person {
    public function greetings() {
        return 'Hi';
    }
}

class Student extends Person {

}
// $Jose = new Person; 
// echo $Jose->greetings();
$Josefi = new Student;
echo $Josefi->greetings();