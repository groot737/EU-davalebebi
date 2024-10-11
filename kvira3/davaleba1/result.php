<?php
require_once('data.php');
$student_answers = $_POST['student_answer'];
$teacher_answers = $_POST['teacher_answer'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$teacher_name = $_POST['teacher_name'];
$teacher_surname = $_POST['teacher_surname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .child-right{
        width: 605px
    }
    .child-right > p:nth-child(2){
        margin-left:110px;
    }
</style>
<body>
    <div class="rectangle">
        <div class='container'>
            <div class='header'>
                <h1><?php echo "სტუდენტი - {$name} {$surname}"?></h1>
                <hr>
            </div>
            <form action="" method="post">
                <div class="form-header">
                    <h3>კითხვა</h3>
                    <h3>მაქს.ქულა</h3>
                    <h3>პასუხი</h3>
                    <h3>შეფასება</h3>
                </div>
                <div class="form-item">
                    <hr>
                    <?php
                     for ($i = 0; $i < count($questions); $i++) {
                        echo '<div class="form-item">
                                <hr>
                                <div class="item-child">
                                    <p>' . $questions[$i]["question"] . '</p>
                                    <div class="child-right">
                                        <p>' . $questions[$i]["point"] . '</p>
                                        <p>'.$student_answers[$i].'</p>
                                        <input type="text" name="teacher_answer[]" placeholder="პასუხი" value='.$teacher_answers[$i].'>
                                    </div>
                                </div>
                              </div>';
                    }
                    ?>
                </div>
                <div class="form-item">
                    <hr>
                    <div class="item-child">
                        <div class='child-left'>
                            <h3>ლექტორი: <?php echo "{$teacher_name} {$teacher_surname}"?></h3>
                            <br>
                            <?php
                            $sum = 0;
                            $average = 0;
                            foreach($teacher_answers as $answer){
                                $sum += (int)$answer;
                            };
                            $average = $sum / count($teacher_answers);
                            echo "<h3>საშუალო ქულა: {$average}</h3>";
                            ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>