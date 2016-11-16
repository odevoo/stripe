<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Paiment de votre prochain cours"
          data-amount="2000"
          data-locale="auto"
          data-name="Adopte un PROF!"
          data-image="img/logo.png"
          data-label="Payer le cours"
          data-currency="eur"
          ></script>
</form>
    
</body>
</html>



<!-- data-description="2 widgets" -->