<?php
// Q: Bank Account: Create an abstract class called BankAccount with properties for the account holder's name and balance. Implement abstract methods deposit() and withdraw(). Then, create two subclasses, SavingsAccount and CheckingAccount, which extend the BankAccount class and provide concrete implementations for the abstract methods.

// myself approach
abstract class BankAccount{ // abstract class in minumum one abstract function define
    protected $account_holder_name, $bank_balance;

    public function __construct($account_holder_name, $bank_balance){ // setter
        $this->account_holder_name = $account_holder_name;
        $this->bank_balance = $bank_balance;
    }

    abstract protected function deposit($amount);
    abstract protected function withdraw($amount);

    public function get_bank_balance(){
        return $this->bank_balance;
    }
}

class SavingAccount extends BankAccount{

    public function deposit($amount){
        $this->bank_balance = $this->bank_balance + $amount;
    }

    public function withdraw($amount){
        if($this->bank_balance >= $amount){
            $this->bank_balance = $this->bank_balance - $amount;
        }else{
            echo "Insufficient bank balance <br>";
        }
    }
}

class CheckingAccount extends BankAccount{

    public function deposit($amount){
        $this->bank_balance = $this->bank_balance + $amount;
    }

    public function withdraw($amount){
        if($this->bank_balance >= $amount){
            $this->bank_balance = $this->bank_balance - $amount;
        }else{
            echo "Insufficient bank balance <br>";
        }

    }
}

$saving_account = new SavingAccount("vishal", 10000);
$saving_account->deposit(200);
echo $saving_account->get_bank_balance()."<br>";
$saving_account->withdraw(10001);
echo $saving_account->get_bank_balance()."<br>";    

$checkin_account = new CheckingAccount("akash", 500);
$checkin_account->deposit(50);
echo $checkin_account->get_bank_balance()."<br>";
$checkin_account->withdraw(60);
echo $checkin_account->get_bank_balance()."<br>";



// class CheckingAccount extends BankAccount{

//     public function withdraw(){

//     }
// }
