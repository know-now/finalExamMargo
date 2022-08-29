<?php 
require_once 'bankaccount.php';

// Creating Subclass

class SavingAccount extends BankAccount
{
    public $interest;

    public function __construct($n, $a, $i)
    {
        parent::__construct($n, $a);
        $this->interest = $i;
       
}

// Retrieving interest


public function retrieve_interest()
    {  $retrInt = $this->interest * $this->amount;
        return $retrInt; }
}



?>