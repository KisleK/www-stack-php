<?php
/**
 * Created by PhpStorm.
 * User: kkuhn
 * Date: 10/5/2018
 * Time: 4:30 PM
 */
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 5</title>
</head>
<body>
<table>
    <tr>
        <td>Month</td>
        <td>Monthly Interest</td>
        <td>Months Balance</td>
    </tr>
</table>
    <?php
            for($x=0; $x < 13; $x++){
                for($i=0; $i<$x; $i++)
                {
                    echo("*");
                }
                echo("<br/>");

            }

    ?>



</body>
</html>