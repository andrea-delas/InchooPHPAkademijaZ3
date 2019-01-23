<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadaća - 2</title>
</head>

<body>
<!-- forma za primanje brojeva putem POST parametra -->
<form method = "POST">
    <input type = "text" name = "numbers" placeholder="Broj redaka" />
    <input type = "text" name = "numbers" placeholder="Broj stupaca" />

    <input type = "submit" name = "submit" value="Pošalji" />
</form>

</body>

</html>



<?php

$rowNumber = ($_POST['numbers']);
$colNumber = ($_POST['numbers']);


function spiral ($rowNumber, $colNumber, &$matrix)
{
    $startingValue = 1;     //postavljanje početne vrijednosti spirale
    $startingRowIndex = 0;   // početne koordinate spirale
    $startingColumnIndex = 0;

    while ($startingRowIndex < $rowNumber && $startingColumnIndex < $colNumber) {
        for ($i = $startingColumnIndex; $i < $colNumber; ++$i) {                    //ispis prvog reda matrice
            $matrix[$startingRowIndex][$i] = $startingValue++;
        }
        $startingRowIndex++;


        for ($i = $startingRowIndex; $i < $rowNumber; ++$i) {                      //ispis zadnjeg stupca
            $matrix[$i][$colNumber - 1] = $startingValue++;
        }
        $colNumber--;

        if ($startingRowIndex < $rowNumber) {
            for ($i = $colNumber - 1; $i >= $startingColumnIndex; --$i) {          //ispis zadnjeg reda
                $matrix[$rowNumber - 1][$i] = $startingValue++;
            }
            $rowNumber--;
        }

        if ($startingColumnIndex < $colNumber) {
            for ($i = $rowNumber - 1; $i >= $startingRowIndex; --$i) {            //ispis prvog stupca
                $matrix[$i][$startingColumnIndex] = $startingValue++;
            }
            $startingColumnIndex++;
        }
    }
}


spiral($rowNumber, $colNumber,$matrix);                                  //pozivanje funkcije
echo "<table border =\"2\" style='border-collapse: collapse'; >";
for ($i = 0; $i < $rowNumber; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $colNumber; $j++) {
        echo '<td style= "width: 20px; height: 20px;">';
        echo ($matrix[$i][$j]);
        echo "</td>";
    }
    echo "</tr>";
}
