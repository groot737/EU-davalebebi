<?php
require_once 'functions.php';
$matrix = [
    [11, 12, 13, 15],
    [15, 16, 17, 18],
    [19, 20, 21, 22],
    [23, 24, 25, 26]
];
$diagonal_nums = getDiagonal($matrix);
$element_sum = getElementSum($matrix);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Display</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse; 
            margin-bottom: 20px; 
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center; 
        }
        th {
            background-color: #f2f2f2; 
        }
        .flex-wrap {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .item {
            flex: 1 1 30%; 
            margin: 10px; 
            padding: 10px;
            border: 1px solid #000; 
            text-align: center; 
        }
    </style>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">შეიყვანეთ რიცხვი</label>
        <input type="number" name="number" id="">
        <button>გაგზავნა</button>

        <table>
            <tbody>
                <?php
                for ($i = 0; $i < count($matrix); $i++) {
                    echo '<tr>'; 
                    for ($j = 0; $j < count($matrix[$i]); $j++) {
                        echo '<td>' . $matrix[$i][$j] . '</td>'; 
                    }
                    echo '</tr>'; 
                }
                ?>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th>დიაგონალის ზემოთა ციფრები</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($diagonal_nums); $i++) {
                    echo '<tr>';
                    echo '<td>' . $diagonal_nums[$i] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th>ელემენტების ჯამი</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($element_sum); $i++) {
                    echo '<tr>';
                    echo '<td>' . $element_sum[$i] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <div class="flex-wrap">
        <?php
        if (isset($_POST['number'])) {
            $num = $_POST['number'];
            echo '<div class="item">' . $num . '-ის ჯერადი მატრიცაში: ' . jeradi($matrix, $num) . '</div>';
        }
        echo '<div class="item">მატრიცის ჯამი: ' . getSum($matrix) . '</div>';
        echo '<div class="item">მატრიცის ნამრავლი: ' . getMultiply($matrix) . '</div>';
        echo '<div class="item">მატრიცის საშუალო არითმეტიკული: ' . getAverage($matrix) . '</div>';
        ?>
       </div>
    </form>
</body>
</html>
