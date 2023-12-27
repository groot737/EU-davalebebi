<?php
    require_once "configuration/config.php";
    require_once "logic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <nav>
            <ol><a href="?category=users">Users</a></ol>
            <ol><a href="?category=books">Books</a></ol>
            <ol><a href="?category=cars">Cars</a></ol>
            <ol><a href="?category=cities">Cities</a></ol>
            <ol><a href="?category=universities">Universities</a></ol>
        </nav>
    </header>
    <div class="main">
        <div class="left">
            <ul>
                <?php
                if(isset($_GET['category'])){
                    foreach($filtered as $data){
                        echo "<li><a href='?category=" . $_GET['category'] . "&id=" . $data[0]. "'>" . $data[1] . "</a></li>";
                    }
                } else {
                    foreach($default as $data){
                        echo "<li><a href='?id=" . $data["user_id"] . "'>" . $data['first_name'] . ' ' . $data['last_name']  . "</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
        <div class="right">
            <?php
             if(isset($_GET['id'])){

                if(isset($_GET['category'])){
                    foreach($filtered as $data){

                        if($data[0] == $_GET['id']){
                            array_shift($data);
                            foreach($data as $items){
                                echo "<h3>" . $items . "</h3><hr>";
                            }
                        }
                    }
                } else{
                    foreach($default as $data){
                        if($data["user_id"] == $_GET['id']){
                            array_shift($data);
                            foreach($data as $items){
                             echo "<h3>" . $items . "</h3><hr>";
                            }
                        }
                    }
                }
             } 
            ?>
        </div>
    </div>
</body>
</html>