<?php
/**
 * Created by PhpStorm.
 * User: kkuhn
 * Date: 9/19/2018
 * Time: 4:18 PM
 */
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ternary</title>
</head>
<body>

<?php
    $age = 19;

    $voteString = ($age >= 18) ? "can vote" : "can't vote";

    echo($voteString);

    $testScore = 67;
    $pass = ($testScore >= 60) ? true : false;
    echo("</br>");
    echo($pass);
?>

</body>
</html>
