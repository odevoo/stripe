<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_pIvyLJj12FdWzjmFUFGVRO1j",
  "publishable_key" => "pk_test_AWlxEJKmNbiDlWgE7BEVWAky"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
