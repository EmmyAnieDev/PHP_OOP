<?php

    class User {

        // Properties are variables inside a class
        public $age;      // This property can be accessed or modified outside the class
        private $name;    // This property can't be accessed or modified outside the class
        private $email;

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
    }


    

    // Creating an object (instantiating the class)
    $userOne = new User('Mario', 'mario@uk.co <br />', 19);
    $userTwo = new User('Yoshi', 'Yoshi@netninja.uk <br />', 24);
    $userThree = new User('Ryu', 'ryu@ninja.co', 27);

    // Calling methods and accessing public properties
    echo $userOne->signOut();  
    echo $userTwo->login();    
    echo $userThree->age;      

    // The following line will not work because $name is private
    // echo $userThree->name; 

?>

