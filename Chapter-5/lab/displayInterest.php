<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interest</title>
</head>
<body>
<!--I dont know what is wrong!!!!-->

<table>
    <tr>
        <td><strong>Month</strong></td>
        <td><strong>Monthly interest</strong></td>
        <td><strong>Months Balance</strong></td>
    </tr>

<?php
$principal = $_REQUEST['principal'];
//echo ($principal . "<br/>");
$interestRate = $_REQUEST['interestRate'];
//echo ($interestRate . "<br/>");
$term = $_REQUEST['term'];
//echo ($term . "<br/>");
$monthlyRate = $interestRate/12;
for ($x=0; $x<($term*12); $x++){
    $monthsInterest = ($principal*$monthlyRate);
    $monthBalance = ($principal + $monthsInterest);
    $principal = $monthBalance;
    echo("<tr>");
    echo("<td>" . ($x+1) . "</td>");
    printf("<td>$%0.2f</td>", $monthsInterest);
    printf("<td>$%0.2f</td>", $monthBalance);
    echo("</tr>");
}

?>


</body>
</html>