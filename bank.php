<?php
class BankAccount
{
   public $account_no;
   public $holder_name;
   public $balance;

  public  function __construct($ac,$hname,$bal)
    {
         $this->account_no=$ac;
         $this->holder_name=$hname;
         $this->balance=$bal;

    }
  public  function deposit($depo)
    {
        $this->balance+=$depo;
        echo $this->balance."<br>";
    }
   public function withdraw($wtdr)
    {
        $this->balance-=$wtdr;
        echo $this->balance."<br>";
    }
   public function __destruct()
    {
        echo "Account closed";
    }
}
$obj= new BankAccount(101,"abi",1000);
$obj->deposit(500);
$obj->withdraw(200);
$obj->deposit(225);

?>