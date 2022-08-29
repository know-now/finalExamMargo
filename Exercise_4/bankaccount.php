<?php 

require_once 'savingaccount.php';
require_once 'professionalacc.php';

class BankAccount

{
    private $accnum;
    private $amount;
    
// Constructing


    public function __construct($n, $a)
    {
        $this->set_accnum($n);
        $this->set_amount($a);
       
    }

    // Setters and getters for BankAccount

    public function set_accnum($newAccnum)
    {
        if (is_string($newAccnum) && (strlen($newAccnum) == 8))
            $this->accnum = $newAccnum;
        else echo "Account number should be a string - 8 characters length <br>";
    }
    public function get_accnum()
    {
        return $this->accnum;
    }
    public function get_amount()
    {
        return $this->amount;
    }
    public function set_amount($newamount)
    {
        if (is_numeric($newamount))
            $this->amount = $newamount;
        else echo "Amount of money should be a number <br>";
    }

    // Withdraw function

    public function withdraw($w)
    {  echo " My bank balance is equal to " . $this->get_amount() . "euro <br>.";
       return $this->amount -= $w;
    }
    public function deposit($d)

    {    return $this->amount += $d;
         
    }

    public function __toString()
    {
        return "My account number is $this->accnum. I have $this->amount money on it; <br>";
    }
}


?>