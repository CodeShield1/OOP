<?php
    // class 
    class user {
        public $email;
        public $name;
        public function showinfo(){
            echo "Name: ". $this->name."<br>";
            echo "email: ". $this->email;

        }
    
    }
    // create object
    $user1 = new user();
    // property
    
    $user1->name = "Brahim";
    $user1->email = "brahim@gmail.com";
    // method
    $user1->showinfo();
?>