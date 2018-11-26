<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Call Functions</title>
</head>
<body>
<?php require("myFunctions.php") ?>
<form action="myFunctions.php" method="post">

<p>
Enter a Temperature : <input type="text" name="temp"/>

    <br/>

        <input type="radio" name="input" value="F"/> Fahrenheit to Celcius

<br/>
        <input type="radio" name="input" value="T"/> Celcius to Fahrenheit

        <br/>
    <input type="submit" value="submit">

    </p>
</form>



</body>
</html>