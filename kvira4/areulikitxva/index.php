<?php
require_once('data.php');
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
<body>
    <div class="rectangle">
        <div class='container'>
            <div class='header'>
                <h1>ქვიზი</h1>
                <hr>
            </div>
            <form action="submit.php" method="post">
                <div class="form-header">
                    <h3>კითხვა</h3>
                    <h3>მაქს.ქულა</h3>
                    <h3>პასუხი</h3>
                </div>
                <?php
                foreach($questions as $question){
                    echo '<div class="form-item">
                    <hr>
                    <div class="item-child">
                        <p>' . $question["question"] . '</p>
                        <div class="child-right">
                            <p>' . $question["point"] . '</p>
                            <input type="text" name="answer[]" id="" placeholder="პასუხი">
                        </div>
                    </div>
                </div>';            
                }
                ?>
                <div class="form-item">
                    <hr>
                    <div class="item-child">
                        <div class='child-left'>
                            <p>სახელი:</p>
                            <input type="text" name="name" id="" placeholder="სახელი">
                            <input type="text" name="surname" id="" placeholder="გვარი">
                            <button>გაგზავნა</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>