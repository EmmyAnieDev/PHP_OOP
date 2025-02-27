<?php

    class User {

        // Properties are variables inside a class
        public $age;      // This property can be accessed or modified outside the class
        private $name;    // This property can't be accessed or modified outside the class
        protected $email;   // this can only be accessed inside the class declared in, and sub classes incase of overiding.
        public $role = 'Member';

        // Constructor to initialize the values when the object is created
        public function __construct($name, $email, $age) {
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
        }

        // Methods are functions within a class
        public function login() {
            return "Logged in user name is $this->name and email is $this->email";
        }

        public function signOut() {
            return "Signed out user name is $this->name and email is $this->email";
        }


        // getter get and return a private property for us
        public function getName(){
            return $this->name;
        }


        // setter sets or change a private property for us
        public function setEmail($newEmail){
            if(strpos($newEmail, '@')){
                $this->email = $newEmail;
            }
        }

        public function userRole(){
            return "$this->name is a $this->role";
            
        }


        public function message(){
            return "$this->email, a member has sent a message";
        }

    }


    // Creating an object (instantiating the class)
    $userOne = new User('Mario', 'mario@uk.co', 19);
    $userTwo = new User('Yoshi', 'Yoshi@netninja.uk', 24);
    $userThree = new User('Ryu', 'ryu@ninja.co', 27);

    // Calling methods and accessing public properties
    echo $userOne->signOut() . '<br />';  
    echo $userTwo->login() . '<br />';    
    echo $userThree->age . '<br />';
    echo $userTwo->userRole() . '<br />';
    echo $userOne->message() . '<br />'; 

    ////// The following line will not work because $name is private
    //echo $userThree->name; 

    // now we can echo/access a private property with the getter nethod
    echo $userThree->getName() . '<br />'; 

    // now we can echo/access/modify the email using the setter method.
    echo $userThree->setEmail('ryu@gmail.com');

    // echo to test the changed email
    echo $userThree->login() . '<br />';


?>

