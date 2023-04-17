<?php
//include required classes
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Membership.php';
require_once __DIR__ . '/Models/PremiumUser.php';

//create memberships
$gold_membership = new Membership('gold', 90);
$silver_membership = new Membership('silver', 70);

//simple user
$gaetano = new User('Gaetano', 39);
$gaetano->set_discount(); //set user discount

//premium user - gold
$gaspare = new PremiumUser('Gaspare', 30, $gold_membership);
$gaspare->set_discount(); //set user discount

//premium user - silver
$filippo = new PremiumUser('Filippo', 23, $silver_membership);
$filippo->set_discount(); //set user discount

//show results
var_dump($gaspare, $gaetano, $filippo);
