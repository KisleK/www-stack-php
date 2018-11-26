<html>
<head>
    <?php
    // Function section
    // instead of including an external doc
    function square($value) {
        $value = $value * $value;
        return ($value);
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Return</title>
</head>
<body>
<?php
    //function calls
    echo "The value of 25.55 squared is " . square(25.55);

    $result = square(37);
    echo " <br/> the result is : " . $result;


    $a = 45;
    $b = 57.25;
    $c = 18;

    $result2 = square($a + $b)/ $c * square($a/$b/$c) + square(square($a));
    echo "</br>" . $result2;
?>


<br/>
<?php
echo(strtoupper("this is in lowercase"));
?>


</body>
</html>