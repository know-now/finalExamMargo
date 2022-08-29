<?php 

// Creating subclass


require_once 'bankaccount.php';

class ProfessionalAccount extends BankAccount
{
    public $limit;

    public function __construct($n, $a, $l)
    {
        parent::__construct($n, $a);
        $this->limit = $l;
       
}
 }

