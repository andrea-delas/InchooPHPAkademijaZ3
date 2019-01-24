<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Zadaća - 3</title>
</head>

<body>

<div class="container-wrap">
    <div class="container">
        <div class="input">
            <div class="input-heading">
                <h1>INPUT</h1>
            </div>
            <div class="input-form">
                <form method = "POST">
                    <label for="row" class="row">Broj redaka</label><br>
                    <input type = "text" name = "row"/><br>
                    <label for="column" class="column">Broj stupaca</label><br>
                    <input type = "text" name = "column"/><br>

                    <input type ="submit" name = "submit" value="KREIRAJ TABLICU" />
                </form>
            </div>
        </div>
        <?php include_once "function.php" ?>
        <div class="output">
            <div class="output-heading">
                <h1>OUTPUT</h1>
            </div>
            <div class="output-table"></div>
            <table>
                <tbody>
                <?php
                for ($i = 0; $i < $rowNumber; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $colNumber; $j++) {
                        echo "<td>";
                        echo ($matrix[$i][$j]);
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>
                </tbody>

            </table>
        </div>
    </div>
</div>




</body>

</html>
