<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


include 'index.php';


// This class inherits properties and methods from the User class,
// making it a subclass (or child class), while User is the superclass (or parent class).
class Admin extends User {

    public $level;

    public function __construct($name, $email, $age, $level){
        $this->level = $level;
        parent::__construct($name, $email, $age);
    }

    public function userLevel(){
        return "Admin level is ($this->level)";
    }
}


$adminOne = new Admin('Sarah', 'sarah@co.uk', 19, 'Advanced');


// calling methods from the super class
echo $adminOne->getName() . '<br />';
echo $adminOne->login() . '<br />';
echo $adminOne->level . '<br />'; 
echo $adminOne->userLevel() . '<br />'; 

?>