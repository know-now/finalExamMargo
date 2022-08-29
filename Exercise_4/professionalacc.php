<?php 

require_once 'bankaccount.php';

class SavingAccount extends BankAccount
{
    private $limit;

    public function __construct($n, $a, $l)
    {
        parent::__construct($n, $a);
        $this->limit = $l;
       
}
 }

