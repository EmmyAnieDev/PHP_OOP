<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


include 'index.php';


// This class inherits properties and methods from the User class,
// making it a subclass (or child class), while User is the superclass (or parent class).
class Admin extends User {

    public $level;
    public $role = 'Admin';  // overiding the role property in the user class

    public function __construct($name, $email, $age, $level){
        $this->level = $level;
        parent::__construct($name, $email, $age);
    }

    public function userLevel(){
        return "Admin level is ($this->level)";
    }


    // overiding a method
    public function message(){
        return "$this->email, an admin has sent a message";
    }
}


$adminOne = new Admin('Sarah', 'sarah@co.uk', 19, 'Advanced');
$adminTwo = new Admin('tom', 'tommy@co.uk', 39, 'Moderator');


// calling methods from the super class
echo $adminOne->getName() . '<br />';
echo $adminOne->login() . '<br />';
echo $adminOne->role . '<br />'; 
echo $adminOne->userLevel() . '<br />'; 
echo $adminTwo->userRole() . '<br />';
echo $adminTwo->message() . '<br />';

?>