<?php
class user{
	private $email;
	private $name;

// 	public function __construct(){
//     $this->email = 'mario@email.com';
//     $this->name = 'mario';
// }

	public function __construct($user,$name){
    $this->email = $user;
    $this->name = $name;
}

	public function login(){
		echo $this->name . ' loggin in';
    }
    
    public function getName(){ //private variable can only get in getName()
        return $this->name ;
    }

    public function setName($name){ //update new name and check type
        if(is_string($name) && strlen($name) > 1){
            $this->name = $name;
            return "name has been updated to $name";
        }else{
            return 'not a valid name';
        }
    }
}

// $userone = new user()
// $userone -> login() // hello world
// echo $userone -> name // mario

$usertwo = new user('maaa@mail.com','maa');

echo $usertwo -> getName(); // maa


echo $usertwo -> setName('he')
?>