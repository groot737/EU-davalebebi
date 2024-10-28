<?php
$nums_arr = [10,11,12,13,14,15,16,17,18,19,20,21,22];
if(isset($_POST['number'])){
    $number = (int)$_POST['number'];
    $naklebi = 0;
    $meti = 0;
    for($i = 0; $i < count($nums_arr); $i++){
        if($number > $nums_arr[$i]){
            $meti += 1;
        } else if($number < $nums_arr[$i]){
            $naklebi += 1;
        }
    }
    echo "{$number}-ზე მეტი ელემენტი არის: {$meti} და ნაკლები: {$naklebi}";
}

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
    <form action="index.php" method="post">
        <label for="">შეიყვანე რიცხვი:</label>
        <input type="number" name="number" id="">
        <button>შეყვანა</button>
    </form>
</body>
</html>