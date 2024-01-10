<?php

require_once 'PaymentProfile.php';
require_once 'Customer.php';
require_once 'Transaction.php';

$transaction = new Transaction(10,'transaction1');

$transaction->customer = new Customer();

echo $transaction->customer?->paymentProfile?->id;