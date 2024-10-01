<!DOCTYPE html>
<html lang="en">
<?php
$total = 0;
$checked = 0;
if(isset($_POST['q1'])){
    $checked = 1;
    if($_POST['q1'] == "1"){
        $total++;
    }
}
if(isset($_POST['q2'])){
    $checked = 1;
    if($_POST['q2'] == "1"){
        $total++;
    }
}
if(isset($_POST['q3'])){
    $checked = 1;
    if($_POST['q3'] == "1"){
        $total++;
    }
}
if(isset($_POST['open1'])){
    $checked = 1;
    $answer = str_replace(' ', '', $_POST['open1']);
    if($answer == "16"){
        $total++;
    }
}
if(isset($_POST['open2'])){
    $checked = 1;
    $answer = str_replace(' ', '', $_POST['open2']);
    if($answer == "5"){
        $total++;
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Check-In Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>ტესტი</h1>
    <form action="index.php" method="POST">
        <div class="question">
            <label>1. ვინ არის ყველა დროის საუკეთესო ფეხბურთელი?</label>
            <input type="radio" name="q1" value="1">ლიონელ მესი<br>
            <input type="radio" name="q1" value="0">კრიშტიანუ რონალდო<br>
            <input type="radio" name="q1" value="0">ზლატან იბრაჰიმოვიჩი<br>
            <input type="radio" name="q1" value="0">კილიან მბაპე<br>
        </div>
        <div class="question">
            <label>რომელი არ არის პროგრამული ენა?</label>
            <input type="radio" name="q2" value="1">html<br>
            <input type="radio" name="q2" value="0">php<br>
            <input type="radio" name="q2" value="0">javascript<br>
            <input type="radio" name="q2" value="0">ada<br>
        </div>
        <div class="question">
            <label>3. როგორ იშიფრება HTML?</label>
            <input type="radio" name="q3" value="1">Hyper Text Markup Language<br>
            <input type="radio" name="q3" value="0">Home Tool Markup Language<br>
            <input type="radio" name="q3" value="0">Hyper Text Language<br>
            <input type="radio" name="q3" value="0">Home Tooling Monitor<br>
        </div>
        <div class="question">
            <label>4) 2 * 8 =</label>
            <input type="text" name="open1" required>
        </div>
        <div class="question">
            <label>5) 15 / 3 =</label>
            <input type="text" name="open2" required>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
    </form>
    <div class="result" id="result">
        <?php
         if($checked == 1){
            echo "<h3>მიღებული ქულა: {$total}</h3>";
         }
        ?>
    </div>
</div>
</body>
</html>