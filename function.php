<?php

$rowNumber = ($_POST['row']);
$colNumber = ($_POST['column']);


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


spiral($rowNumber, $colNumber,$matrix);

