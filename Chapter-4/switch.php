<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch.....Case....Break</title>
</head>
<body>
<?php
$grade = 'f';

switch($grade)
{
    case 'A':
    case 'a':
        echo("Great grade.");
        break;

    case 'B':
    case 'b':
        echo("That/s above average.");
        break;

    case 'C':
    case 'c':
        echo("That is average.");
        break;

    case 'D':
    case 'd':
        echo("D is a low passing grade.");
        break;

    case 'F':
    case 'f':
        echo("F is a failure grade.");
        break;

    default:
        echo("Letter grade not recognized");
}
?>
</body>
</html>