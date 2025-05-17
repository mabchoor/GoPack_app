<?php
//session_start();
require __DIR__ . '/config.php';
require __DIR__ . '/vendor/autoload.php';
use Stripe\Stripe;
Stripe::setApiKey('Mysecret_key');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'] * 100;
    $cardNumber = $_POST['cardNumber'];
    $expMonth = $_POST['expMonth'];
    $expYear = $_POST['expYear'];
    $cvc = $_POST['cvc'];
  
    // Use Stripe PHP library to create a new charge
    try {
      $charge = \Stripe\Charge::create([
        'amount' => $amount,
        'currency' => 'MAD',
        'source' => [
          'object' => 'card',
          'number' => $cardNumber,
          'exp_month' => $expMonth,
          'exp_year' => $expYear,
          'cvc' => $cvc
        ]
      ]);
  
      // Payment successful - display a success message to the user
      echo "Payment successful!";
    } catch (Exception $e) {
      // Payment failed - display an error message to the user
      echo "Payment failed: " . $e->getMessage();
    }
  }
?>
