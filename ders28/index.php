<?php
require_once 'Stripe/Transaction.php';
require_once 'Paddle/Transaction.php';
require_once 'Paddle/CustomerProfile.php';

/*
use Stripe\Transaction;
#use const Stripe\Transaction;
#use  function Stripe\Transaction;
*/
//use Paddle\Transaction;
use Stripe\Transaction as StripeTransaction;
use Paddle\{Transaction,CustomerProfile}; //also work
$paddleTransaction = new Transaction();
$paddleTransaction = new Paddle\Transaction(); // work
$stripeTransaction = new Transaction();

var_dump($paddleTransaction,$stripeTransaction);
/*
var_dump(new Paddle\Transaction());
var_dump(new Transaction());
*/
