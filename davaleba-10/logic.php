<?php
$categories = ["books", "cars", "cities","universities"];
$is_at_category = false;

if(isset($_GET['category'])){
    foreach($categories as $category){
        if ($_GET['category'] == $category){
            $is_at_category = true;
            $select_data = "SELECT * FROM EU_DATABASE.$category";
            $result = mysqli_query($connect, $select_data);
            $filtered = mysqli_fetch_all($result);

        } 
    };
    if(!$is_at_category){
        header("location: index.php");
    }
} else{
    $select_data = "SELECT * FROM EU_DATABASE.users";
    $default = mysqli_query($connect, $select_data);
}
?>