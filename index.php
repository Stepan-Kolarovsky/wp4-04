<?php
require_once "classes/Bagetomat.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $mybagetomat = new Bagetomat(99,42,0);
     $mybagetomat->insertCoin(10);
     $mybagetomat->insertCoin(20);
     $mybagetomat->insertCoin(5);
     $mybagetomat->insertCoin(5);
     $mybagetomat->insertCoin(5);

    $returnCoins = 0;
     try{
         $returnCoins = $mybagetomat->makeOrder();
         echo "Bageta zakoupena! Vráceno: $returnCoins";
    }catch (Throwable $th) {
        echo $th->getMessage();
    }
    ?>
</body>
</html>