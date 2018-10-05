<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Each Loop</title>
</head>
<body>
<?php

    $gpas;
    $gpas['Fred'] = 3.62;
    $gpas['Mary'] = 2.75;
    $gpas['Jan'] = 4.00;
    $gpas['Jason'] = 2.10;
    $gpas['Mark'] = 2.87;

    $totalGpa=0;

        foreach($gpas as $key => $value)
        {
            echo("Name: " . $key);
            echo("<br/>GPA: " . $value);
            echo("<br/>");

            $totalGpa += $value;

        }
    echo("Total GPA: " . $totalGpa);
        $averageGpa = $totalGpa / count($gpas);

        echo("<br/>Average GPA: " . $averageGpa);

?>



</body>
</html>