<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Functions</title>
</head>
<body>
<?php
function fToC ($fTemp)
{
    $cTemp = (5/9)*($fTemp-32);
    return ($cTemp);
}
function cToF ($cTemp)
{
    $fTemp = (9/5)*$cTemp+32;
    return ($fTemp);
}

if(isset($_REQUEST['input']) && isset($_REQUEST['temp']))
{
    $temp = $_REQUEST['temp'];
    $choice = $_REQUEST['input'];
    if($choice == "F")
    {
        printf("%0.2f&deg; Celsius", fToC($temp));
    } else {
        printf("%0.2f&deg; Farenheit", cToF($temp));
    }
}

?>



</body>
</html>