<?php


// დიაგონალის პოვნა
function getDiagonal($matrix) {
    $x = 0;
    $diagonalTopItems = [];
    for ($i = 0; $i < count($matrix); $i++) {
        $temp = array_slice($matrix[$i], $x + 1);
        foreach ($temp as $item) {
            $diagonalTopItems[] = $item;
        }
        $x++;
    }
    return $diagonalTopItems;
}

// ჯამის პოვნა
function getSum($matrix) {
    $sum = 0;
    foreach ($matrix as $row) {
        foreach ($row as $value) {
            $sum += $value;
        }
    }
    return $sum;
}

// ნამრავლის პოვნა
function getMultiply($matrix) {
    $multiply = 1;
    foreach ($matrix as $row) {
        foreach ($row as $value) {
            $multiply *= $value;
        }
    }
    return $multiply;
}

// საშუალო არითმეტიკულის პოვნა
function getAverage($matrix) {
    $sum = 0;
    $total = 0;
    foreach ($matrix as $row) {
        foreach ($row as $value) {
            $sum += $value;
            $total++;
        }
    }
    return ceil($sum / $total);
}

// ელემენტის ციფრთა ჯამი
function getElementSum($matrix) {
    $result = [];
    foreach ($matrix as $row) {
        foreach ($row as $value) {
            $num = (string)$value;
            if (strlen($num) > 1) {
                $result[] = intval($num[0]) + intval($num[1]);
            } else {
                $result[] = intval($num[0]);
            }
        }
    }
    return $result;
}

// ჯერადის გაგება
function jeradi($matrix, $x) {
    $result = "";
    foreach ($matrix as $row) {
        foreach ($row as $value) {
            if ($value % $x == 0) {
                $result .="{$value} ";
            }
        }
    }
    return $result;
}


?>
