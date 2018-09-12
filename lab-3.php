<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 3</title>
</head>
<body>
    <?php
          $TestOne = array (
              "Smith" => 98,
              "Johnson" => 67,
              "Fields" => 71,
              "Laurel" => 68,
              "Gold" => 91,
              "Braverman" => 98,
              "Stone" => 84,
              "Kiel" => 84
                            );
          $TestTwo = array (
              "Smith" => 75,
              "Johnson" => 88,
              "Fields" => 81,
              "Laurel" => 63,
              "Gold" => 67,
              "Braverman" => 82,
              "Stone" => 77,
              "Kiel" => 81
          );
          $TestThree = array(
              "Smith" => 100,
              "Johnson" => 85,
              "Fields" => 76,
              "Laurel" => 71,
              "Gold" => 63,
              "Braverman" => 55,
              "Stone" => 81,
              "Kiel" => 79
          );
          $TestFour = array(
              "Smith" => 91,
              "Johnson" => 81,
              "Fields" => 77,
              "Laurel" => 70,
              "Gold" => 90,
              "Braverman" => 82,
              "Stone" => 90,
              "Kiel" => 100
          );

    $TestOneAverage =array_sum($TestOne)/count($TestOne);
    $TestTwoAverage =array_sum($TestTwo)/count($TestTwo);
    $TestThreeAverage =array_sum($TestThree)/count($TestThree);
    $TestFourAverage =array_sum($TestFour)/count($TestFour);
    echo("The average fot Test One is " . $TestOneAverage);
    echo("<br/> The average fot Test Two is " . $TestTwoAverage);
    echo("<br/> The average fot Test Three is " . $TestThreeAverage);
    echo("<br/> The average fot Test Four is " . $TestFourAverage);

    echo ("<br/>");
    echo ("<br/>");

    ?>

    <table style="width:100%">
        <tr>
            <th>Name</th>
            <th>Test One</th>
            <th>Test Two</th>
            <th>Test Three</th>
            <th>Test Four</th>
        </tr>
        <tr>
            <td>Smith</td>
            <td><?php echo($TestOne["Smith"]);?></td>
            <td><?php echo($TestTwo["Smith"]);?></td>
            <td><?php echo($TestThree["Smith"]);?></td>
            <td><?php echo($TestThree["Smith"]);?></td>
        </tr>

    </table>

</body>
</html>