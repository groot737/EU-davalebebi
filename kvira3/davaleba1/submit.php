<?php
require_once('data.php');
$answers = $_POST['answer'];
$name = $_POST['name'];
$surname = $_POST['surname'];
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
            <form action="result.php" method='post'>
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
                                        <p>'.$answers[$i].'</p>
                                        <input type="text" name="student_answer[]"  hidden=true value='.$answers[$i].'>
                                        <input type="number" name="teacher_answer[]" max=' . $questions[$i]["point"] . ' placeholder="პასუხი">
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
                            <p>ლექტორი:</p>
                            <?php
                               echo '<input type="text" name="name" hidden=true value="' . $name . '">
                               <input type="text" name="surname" hidden=true value="' . $surname . '">';
                            ?>
                            <input type="text" name="teacher_name" id="" placeholder="სახელი">
                            <input type="text" name="teacher_surname" id="" placeholder="გვარი">
                            <button>გაგზავნა</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>