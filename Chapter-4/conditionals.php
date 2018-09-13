<?php
/**
 * Created by PhpStorm.
 * User: kkuhn
 * Date: 9/12/2018
 * Time: 2:04 PM
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditionals</title>
</head>
<body>
<?php
$age = 19;
$citizen = true;
/*

    Comparison Operators
    == Equivlency (equals)
    >  Greater than
    <  Less than
    >= Greater than or equal to
    <= Less than or equal to
    != Not equal to

    Compound Conditionals
    && and
    || or

 */


if($age >= 18 && $citizen == true)
{
    echo("<strong> You are eligible to vote! </strong>");
}



?>


</body>
</html>
