<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 4</title>
</head>
<body>
    <?php
        $age= 75;

        if ($age < 18 )
            {
                echo ("You're Still a Pup! Stay in School.");
            }
        elseif ( $age <= 29)
        {
            echo("This is the prime of your life---Enjoy!");
        }

        elseif ($age <= 39)
        {
            echo("this is the time to focus on your career!");
        }

        elseif ($age <=49 )
        {
            echo("These might be your prime earning years.");
        }

        elseif ($age <= 59)
        {
            echo("Time to get ready for retirement");
        }
        elseif ($age > 60)
        {
            echo("What's life's next adventure?");
        }
    ?>

<?php
        $Mary = array (
            "Test One"  => 89,
            "Test Two"  => 99,
            "Test Three"  => 63,
            "Test Four"  => 85,
        );

    $Bob = array (
            "Test One"  => 73,
            "Test Two"  => 80,
            "Test Three"  => 81,
            "Test Four"  => 82,
        );
    $Mark = array (
            "Test One"  => 90,
            "Test Two"  => 95,
            "Test Three"  => 91,
            "Test Four"  => 70,
        );

    $MaryAverage =array_sum($Mary)/count($Mary);
    $BobAverage =array_sum($Bob)/count($Bob);
    $MarkAverage =array_sum($Mark)/count($Mark);


    if($MaryAverage || $BobAverage || $MarkAverage >= 97)
    {
        echo("A+");
    }
    elseif($MaryAverage || $BobAverage || $MarkAverage >= 92)
    {
        echo("A");
    }
    elseif($MaryAverage || $BobAverage || $MarkAverage >= 90)
    {
        echo("A-");
    }
    elseif($MaryAverage || $BobAverage || $MarkAverage >= 87)
    {
        echo("B+");
    }
    elseif($MaryAverage || $BobAverage || $MarkAverage >= 83)
    {
        echo("B");
    }
    elseif($MaryAverage || $BobAverage || $MarkAverage >= 80)
    {
        echo("B-");
    }
    elseif($MaryAverage || $BobAverage || $MarkAverage >= 80)
    {
        echo("C");
    }
    elseif($MaryAverage || $BobAverage || $MarkAverage >= 70)
    {
        echo("D");
    }
    elseif($MaryAverage || $BobAverage || $MarkAverage >= 90)
    {
        echo("F");
    }
    echo("</br>");
        echo($MarkAverage);
    echo("</br>");
    echo($MaryAverage);
    echo("</br>");
    echo($BobAverage);
?>




</body>
</html>