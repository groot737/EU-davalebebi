<!DOCTYPE html>
<html lang="en">
<?php
// კურსის ინფორმაცია
$data = [
    0 => [
        "name" => "ინფორმატიკა",
        "lecturer" => "გიორგი ქუჩულორია",
    ],
    1 => [
        "name" => "ბიზნეს ადმინისტრიტება",
        "lecturer" => "ჯეფ ბეზოსი"
    ],
    2 => [
        "name" => "ესპანურის ფილოლოგია",
        "lecturer" => "ლიონელ მესი"
    ],
    3 => [
        "name" => "სამართალი",
        "lecturer" => "ლაშა ჯანიბეგაშვილი"
    ]
];

// სტუდენტის ინფორმაცია
$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$semester = htmlspecialchars($_POST['semester']);
$score = (int)$_POST['score'];
$course = $data[(int)$_POST['course']]['name'];
$lecturer = $data[(int)$_POST['course']]['lecturer'];
$point = "";

// შეფასების გამოანგარიშება
if($score >= 90){
    $point = "A";
} else if($score >= 80){
    $point = "B";
} else if($score >= 70){
    $point = "C";
} else if($score >= 60){
    $point = "D";
} else{
    $point = "E";
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Table</title>
    <link rel="stylesheet" href="./styles/result.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>სახელი</th>
                <th>გვარი</th>
                <th>სემესტრი</th>
                <th>კურსი</th>
                <th>ლექტორი</th>
                <th>დეკანი</th>
                <th>შეფასება</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
             echo "
             <td>{$name}</td>
             <td>{$surname}</td>
             <td>{$semester}</td>
             <td>{$course}</td>
             <td>{$lecturer}</td>
             <td>სანდრო ვეკუა</td>
             <td>{$point}</td>
             "
            ?>
            </tr>
        </tbody>
    </table>
</body>

</html>
