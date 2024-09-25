<?php

    // create a user validator class to handle validation
    // constructor which takes in POST data from form
    // check required "fields to check" are present in the data
    // create methods to validate individuals fields
    // .. a method to validate username
    // .. a method to validate email
    // returns an error array once all checks are done


    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    // create a user validator class to handle validation
    class UserValidator {

        private $data;
        private $errors = [];
        private static $fields = ['username', 'email'];


        // constructor which takes in POST data from form
        public function __construct($post_data){
            $this->data = $post_data;
        }


        // Methods to validate individuals fields
        public function validateForm(){
            foreach(self::$fields as $field){
                if(!array_key_exists($field, $this->data)){  // check if the field does not exists in the array as a key inside that data.
                    trigger_error("$field is not present in data");
                    return;
                }
            }

            $this->validateUsername();
            $this->validateEmail();

            // Return error(s), but if there's not error it'll retun empty array as declared in the variable
            return $this->errors;
        }


        // Method to validate the username
        private function validateUsername(){

            $username = trim($this->data['username']);

            if(empty($username)){
                $this->addError('username', 'username cannot be empty');
            }else{
                if(!preg_match("/^[a-zA-Z0-9]{6,12}$/", $username)){
                    $this->addError('username', 'username must be 6-12 chars and alphanumeric');
                }
            }
        }


        // Method to validate the email
        private function validateEmail(){

            $email = trim($this->data['email']);

            if(empty($email)){
                $this->addError('email', 'email cannot be empty');
            }else{
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $this->addError('email', 'email must be a valid email');
                }
            }

        }


        // Method to add error messages to the errors array if it exits
        private function addError($key, $message){
            $this->errors[$key] = $message;
        }


    }



?>