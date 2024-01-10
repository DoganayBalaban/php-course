<?php
declare(strict_types=1);

class Transaction
{
    /*
    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;

    }
    */

    //daha sade yaızımı
    public ?Customer $customer = null;
    public function __construct(
        private float  $amount,
        private string $description
    )
    {
    }


    // perfectly yazım
    /*
    private float $amount;
    public function __construct(
        float $amount,
        private string $description
    )
    {
        $this->amount=$amount;
    }
*/
}