<?php
$paymentStatus = 1;
match ($paymentStatus) {
    1 => print 'Paid',
    2,3 => print 'declined',
    0 => print 'pending',
    default => 'unknown',
};