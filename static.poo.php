<?php 

class Person {
    //static propierty allows to call propierty withouth create an object with ::
    public static $raze = 'human'; 

    //static methos allows to call a method withouth create an object with ::

    public static function greeting($name=null){ 
       if ($name){ 
           return ' hi '.$name.' how are you?';
        }
       else {
           return 'can you tell me your name?';
        }
       
    }
    
}

echo Person::$raze;
echo '<br>';
echo Person::greeting('Carlos');
echo '<br>';
echo Person::greeting();