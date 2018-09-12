<?php
/**
 * Created by PhpStorm.
 * User: kkuhn
 * Date: 9/11/2018
 * Time: 3:06 PM
 */
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi Demensional</title>
</head>
<body>

<?php
    $teams = array(
                    "Yankees" => array
                         (
                             "Rivera",
                             "Jeter",
                             "Ganderson",
                             "Sabathia",
                             "Gardner"
                         ),
                    "Mets" => array(" Dickey", "Acosta", "Pelfrey"),
                    "Red Sox" => array ("Ortiz", "Bard", "Buckholtz", "Beckett")
                   );
       echo ($teams['Yankees'][0]);
       echo ('<br/>');
       echo ($teams['Red Sox'][1]);
?>

</body>
</html>
