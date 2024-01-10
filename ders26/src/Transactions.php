<?php
declare(strict_types=1);
class Transactions
{

    private float $amount = 15;
    private string $description;


    public function getAmount():float{
        return $this->amount;
    }
    public function __construct(float $amount,string $description)
    {
        $this->amount=$amount;
        $this->description=$description;
    }
    public function addTax(float $rate):Transactions{
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }
    public function applyDiscount(float $rate):Transactions{
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }
    public function __destruct()
    {
       echo 'Yıkıcı' . $this->description . '<br>';
    }
}