<?php
$paymentStatus = 'declined';

switch ($paymentStatus){
    case 'paid':
        echo 'Paid';
        break;
    case 'declined':
    case 'rejected':
        echo 'declined';
        break;
    default:
        echo 'unknown';
}