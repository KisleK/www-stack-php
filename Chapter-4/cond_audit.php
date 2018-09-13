<?php
/**
 * Created by PhpStorm.
 * User: kkuhn
 * Date: 9/12/2018
 * Time: 2:13 PM
*/
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checking Your Age</title>
</head>
<body>
<?php
    $age = $_REQUEST["age"];
    $citizen = $_REQUEST["citizen"];

    if($age >= 18 && $citizen == "true")
    {
        echo("<strong> You Are eligible to vote</strong>");
    }
    else if ($age == 17 || $citizen == "false" || "true")
    {
        echo( "One more year");
    }

?>

</body>
</html>
