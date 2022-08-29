<?php 
require_once 'bankaccount.php';

class SavingAccount extends BankAccount
{
    public $interest;

    public function __construct($n, $a, $i)
    {
        parent::__construct($n, $a);
        $this->interest = $i;
       
}

public function retrieve_interest()
    {  
        return  $retrInt = $this->interest * $this->amount; }

 
}



?>