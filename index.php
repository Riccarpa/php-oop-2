<?php 
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/UserOrder.php';
require_once __DIR__ . '/models/Product.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myshop</title>
</head>
<body>
    <h1>Benvenuto,</h1>
    <?php $user = new User('Riccardo','Pagni','via Mincio 30','Premium member'); ?>
    <p><?php echo $user->getUserData() ?></p>

    <h2>I tuoi ordini:</h2>
    <p>
        <?php $order = new UserOrder('ab-2243234','T-shirt','M','Verde',12); ?>
        <?php echo $order->getOrderData(); ?>
        <?php echo $order->getDiscount(); ?>
        <br>
        <?php echo $order->getFinalPrice(); ?>
        
    </p>
    <p>
    <?php $order1 = new UserOrder('cd-2243234','Pantalone','M','blu',100,'Contrassegno'); ?>
    <?php echo $order1->getOrderData(); ?>
    <?php echo $order1->getDiscount(); ?>
    <br>
    <?php echo $order1->getFinalPrice(); ?>

    </p>



    
</body>
</html>