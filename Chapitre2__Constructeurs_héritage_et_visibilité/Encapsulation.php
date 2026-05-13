<?php


    class BankAccount{
        private $balance=0; 
        public function  deposit($money){
            if($money>0){
                $this->balance+=$money;
            }   
        }   

        public function getBalance(){
            return $this-> balance;
        }
    }

    $account =new BankAccount();
    $account->deposit(900);
    echo $account->getBalance();








   



// setter   katbedel bayante 
// o getter katjibe bayanate 



























