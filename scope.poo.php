<?php 

class User {
    public $name; //public propierty can be accessed  in any class
    protected $email; // protected property can be accessed only in the class created and inherited
    private $sex; //private propierty can be accessed only in the class created

    function __construct($name, $email, $sex){
        $this->name = $name;
        $this->email = $email;
        $this->sex = $sex;
    }

    public function showInfo() {
        return $this->email;
    }

    public function privateInfo() {
        return $this->sex;
    }
    
}

class Member extends User {
    public function showEmail(){
        return 'This is the email:  ' .$this->email;
    }

    public function showPrivateInfo(){
        return 'This is the private info: ' .$this->sex;
    }

}

$Jose = new User ('Jose', 'josegallo@gmail.com','male' );
// echo $Jose->email;
echo $Jose->privateInfo();
echo $Jose->showInfo();

$Joselmo = new Member ('Joselmo', 'josemo@gmail.com', 'male');
echo $Joselmo->showEmail();
echo $Joselmo->showPrivateInfo();


