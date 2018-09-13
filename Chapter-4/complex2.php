<?php
/**
 * Created by PhpStorm.
 * User: kkuhn
 * Date: 9/12/2018
 * Time: 2:57 PM
 */
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>More Complex</title>
</head>
<body>
<?php
    $gpa = 1.1;


    if($gpa == 4.0)
    {
        echo("You have a perfect gpa.");
    }
    elseif ($gpa > 3.0)
    {
        echo("You have a very good GPA.");
    }
    elseif ($gpa > 2.0)
    {
        echo( "Your GPA is about average.");
    }
    elseif ($gpa > 1.0)
    {
        echo("Your GPA is very poor.");
    }
    else
    {
        echo("Do you even school?");
    }


?>
</body>
</html>
