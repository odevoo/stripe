<?php
require_once('./config.php');

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'source'  => $token
  ));
// $customer->keys();
  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 2000,
      'currency' => 'eur'
  ));

  echo '<h1>Paiment de 20€ accepté</h1>';
