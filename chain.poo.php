<?php 

class User {
    public $name; 
    public $email; 

    function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }

    public function showName(){
        echo 'the name is: '. $this->name . '<br>';
        //for chain methos it is needed to add return this at the end of the method.
        return $this;
    }

    public function showEmail(){
        echo 'the email is: '. $this->email . '<br>';
        //for chain methos it is needed to add return this at the end of the method.
        return $this;
    }
}

$Jose = new User ('Jose', 'josegallo@gmail.com');
//now we can chain methods
$Jose->showName()->showEmail();
