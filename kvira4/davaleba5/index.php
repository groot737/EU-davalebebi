<?php
$cars = array(
    array("Make"=>"Toyota", 
        "Model"=>"Corolla", 
        "Color"=>"White", 
        "Mileage"=>24000, 
        "Status"=>"Sold"),

    array("Make"=>"Toyota", 
        "Model"=>"Camry", 
        "Color"=>"Black", 
        "Mileage"=>56000, 
        "Status"=>"Available"),

    array("Make"=>"Honda", 
        "Model"=>"Accord", 
        "Color"=>"White", 
        "Mileage"=>15000, 
        "Status"=>"Sold")
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars List</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Color</th>
                <th>Mileage</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($cars as $car) {
                echo "<tr>
                    <td>{$car['Make']}</td>
                    <td>{$car['Model']}</td>
                    <td>{$car['Color']}</td>
                    <td>{$car['Mileage']}</td>
                    <td>{$car['Status']}</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
