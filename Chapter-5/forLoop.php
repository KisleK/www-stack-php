<?php
/**
 * Created by PhpStorm.
 * User: kkuhn
 * Date: 10/4/2018
 * Time: 3:42 PM
 */
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Loops</title>
</head>
<body>
    <?php
        // Three parts of a loop
        // Initialization
        // Continuation Condition
        // Counter


        // counting up
        for($i=0; $i < 100; $i++)    // for(initialization; Continuation Condition; Counter)
        for($i=0; $i < 200; $i+=5)
        {
            echo($i . "</br>");
        }

        // counting down
        for($x=400; $x > -1; $x-= 21.67)
        {
            echo($x . "</br>");
        }


    ?>

</body>
</html>
