<?php 
require_once('classes/bankaccount.php');
require_once('classes/savingaccount.php');

$sa=new SavingAccount('6661234',6000,2.5);
#echo 'Bank account #'.$sa->getAccountNumber().'<br/>';
#echo 'Balance $'.$sa->getBalance().'<br/>';

#echo 'Adding interest...'.'<br/>';
#$sa->addInterest();

#echo 'Balance: $'.$sa->getBalance();
#echo '---------- <br/>'; 
echo $sa;
