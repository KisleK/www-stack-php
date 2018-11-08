<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display included data</title>
</head>
<body>
<?php
    echo("printed from container.php");
?>
<br>


<?php
    require("includeMe.php");
?>
<br>
<?php
    include("includeMe.php");
?>

</body>
</html>