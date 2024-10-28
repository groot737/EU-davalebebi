<?php
$matrix = [
    [1, 2, 3, 4, 5, 6],
    [7, 8, 19, 10, 12, 13],
    [14, 15, 16, 17, 18, 19],
    [20, 21, 22, 23, 24, 25],
    [26, 27, 28, 29, 30, 31]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php
        for ($i = 0; $i < count($matrix); $i++) {
            echo "<tr>"; 
            for ($j = 0; $j < count($matrix[$i]); $j++) {
                $matrix[$i][$j] = $i + $j;
                echo "<td>" . $matrix[$i][$j] . "</td>";
            }
            echo "</tr>"; 
        }
        ?>
    </table>
</body>
</html>
