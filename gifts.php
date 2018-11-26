<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$name = array (
    "Lisa",
    "Peter",
    "Tim",
    "Jenna",
    "Brian",
    "Sarah",
    "Casey",
    "James",
    "Kendra",
    "Kyle"
);
$randomize = shuffle($name);
if ($name !== $randomize) {
    $randomize;
}
else
    echo "stop";
?>
</body>
</html>