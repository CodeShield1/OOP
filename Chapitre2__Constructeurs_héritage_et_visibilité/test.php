<?php

//     class Phone{
//       public $brand;
//       public $price;
        
//       public function __construct($brand , $price){
//         $this->brand=$brand;
//         $this->price=$price;

//       }
//     }

// $iphone1=new Phone("iphone" , 1200);
// echo $iphone1->brand;
// echo "<br>";
// echo $iphone1->price;

// echo "<br>";
// echo "<br>";


// class Player{
//     public $health =-100;

//     public function takeDamage($damage){
        
//         $this->health-=$damage;
//         if($this->health < 0){
//           $this->health = 0;
//         }
      
//       return "Player health now: " . $this->health;
     
//     }
// }
//     $player1=new Player();
//     echo $player1->takeDamage(30);





  echo "<br>";
  echo "<br>";





 
  // class GamePlayer{
  //   private $health=100;

  //   public function setHealth($health){
  //     if($health >= 0){
  //       $this ->health=$health;
  //     } 
  //   }
  //   public function getHealth(){
  //     return $this->health;

  //   }
  // } 
  // $player= new GamePlayer();
  // $player->setHealth(80);

  // echo $player->getHealth();


  echo "<br>";
  echo "<br>";


  // class Phone {
  //   private $battery=100;
  //   public function  useBattery($mount){
  //    $this->battery-=$mount;
  //     if($this->battery<0){
  //       $this->battery=0;
  //     }
  //   }
  //     public function getBattery(){
  //       return "battery : $this->battery";
  //     }
  // }

  // $phone1=new Phone();
  // $phone1->useBattery(10);
  // echo $phone1->getBattery();








// class BankAccount {

//     private $owner;
//     private $balance;

//     public function __construct($owner, $balance) {

//         $this->owner = $owner;

//         if($balance >= 0) {
//             $this->balance = $balance;
//         } else {
//             $this->balance = 0;
//         }

//     }

//     public function deposit($money) {

//         if($money > 0) {

//             $this->balance += $money;

//         }

//     }

//     public function withdraw($money) {

//         if($money > 0 && $money <= $this->balance) {

//             $this->balance -= $money;

//         }

//     }

//     public function getBalance() {

//         return $this->balance;

//     }

//     public function getOwner() {

//         return $this->owner;

//     }

// }

// $account = new BankAccount("Brahim", 1000);

// $account->deposit(500);

// $account->withdraw(300);

// echo $account->getBalance();





class BankAccount {

    private $owner;
    private $balance;

    public function __construct($owner, $balance) {

        if(empty($owner)) {

            echo "Owner name cannot be empty <br>";

        } else {

            $this->owner = $owner;
        }

        if($balance < 0) {

            echo "Balance cannot be negative <br>";

        } else {

            $this->balance = $balance;
        }
    }

    // Getter
    public function getOwner() {

        return $this->owner;
    }

    public function getBalance() {

        return $this->balance;
    }

    // Deposit
    public function deposit($amount) {

        if($amount > 0) {

            $this->balance += $amount;

            echo "$amount DH deposited successfully <br>";

        } else {

            echo "Invalid deposit amount <br>";
        }
    }

    // Withdraw
    public function withdraw($amount) {

        if($amount > 0 && $amount <= $this->balance) {

            $this->balance -= $amount;

            echo "$amount DH withdrawn successfully <br>";

        } else {

            echo "Invalid withdraw amount <br>";
        }
    }
}

class SavingsAccount extends BankAccount {

    private $interest;

    public function __construct($owner, $balance, $interest) {

        parent::__construct($owner, $balance);

        $this->interest = $interest;
    }

    // Override
    public function withdraw($amount) {

        if($amount > 0 && ($this->getBalance() - $amount) >= 100) {

            parent::withdraw($amount);

        } else {

            echo "Cannot go below 100 DH <br>";
        }
    }

    public function getInterest() {

        return $this->interest;
    }
}

$account = new SavingsAccount("Brahim", 1000, 5);

echo "Owner : " . $account->getOwner() . "<br>";

echo "Balance : " . $account->getBalance() . " DH <br>";

$account->deposit(500);

$account->withdraw(300);

echo "New Balance : " . $account->getBalance() . " DH <br>";

echo "Interest : " . $account->getInterest() . "% <br>";





//Getter
// كتقرا البيانات.

// Setter
// كتبدل البيانات بطريقة آمنة.