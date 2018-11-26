<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save File</title>
</head>
<body>
<?php
    $fileName = "names.txt";
    $fp = fopen ($fileName,'w' ) or die ("Cant open file");

    $name = array (
        "Kyle",
        "Tim",
        "James",
        "Jenna",
        "Sarah"
    );

    for($i = 0; $i < count($name); $i ++)
    {
        fwrite($fp, $name[$i] . "\n");
    }




    fclose($fp);
echo "Saved Names";
?>
</body>
</html>