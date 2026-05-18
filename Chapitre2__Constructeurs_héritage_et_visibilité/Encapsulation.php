<?php


    // class BankAccount{
    //     private $owner;
    //     private $balance;


    //    public function __construct($owner, $balance) {

    //     $this->owner = $owner;

    //     if($balance >= 0) {

    //         $this->balance = $balance;

    //     } else {

    //         $this->balance = 0;

    //     }

    // }

    //     public function deposit($money){
    //         if($money>0){
    //             $this->balance+=$money;
    //         }
    //     }
          

    //     public function withdraw($money){
    //         if($money>0 && $money <= $this->balance){
    //                  $this->balance-=$money;
    //         }
    //     }
        
    //     public function getBlance(){
    //         return $this -> balance;
    //     }

    //     public function getowner(){
    //         return $this -> owner;
    //     }

    // }

    //  $acount=new BankAccount("brahim",-100);
    //  $acount->deposit(500);
    //  $acount->withdraw(300);
    //  echo $acount->getBlance();
    //  echo "<br>";
    //  echo $acount->getowner();

    


    // class Animal{
    //     protected $name;
    //     public function __construct($name){
    //         $this->name=$name;
    //     }
    //     public function makeSound(){
    //       return "Animale : " .$this->name;
    //     }
    // }

    // class Dog extends Animal{
    //     public function __construct($name){
    //         parent::__construct($name);
    //     }

    //     public function makeSound() {
    //       return "Dog sound : " . $this->name;
    //     }
    // }


    // $dog = new Dog("Rex");
    // echo $dog->makeSound();





    class Employee{
        protected $name;
        protected $salary;

        public function __construct($name , $salary) {
          $this -> name=$name;
          $this -> salary=$salary;
        }

        public function showInfo(){
            return "salary : .$this->salary <br>".
                    "Name : .$this->salary";
        }

          public function calculateSalary() {

        return $this->salary;
    }



    }




   



// setter   katbedel bayante 
// o getter katjibe bayanate 



























