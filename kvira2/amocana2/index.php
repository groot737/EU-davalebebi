<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Form</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <form action="result.php" method="post">
        <h2>სტუდენტის ინფორმაცია</h2>
        <label for="name">სახელი</label>
        <input type="text" name="name" id="name" placeholder="მიუთითეთ სახელი" required>

        <label for="surname">გვარი</label>
        <input type="text" name="surname" id="surname" placeholder="მიუთითეთ გვარი" required>

        <label for="semester">სემესტრი</label>
        <input type="number" name="semester" id="semester" placeholder="მიუთითეთ სემესტრი" required>

        <label for="course">კურსი</label>
        <select name="course" id="">
            <option value="0">ინფორმატიკა</option>
            <option value="1">ბიზნეს ადმინისტრიტება</option>
            <option value="2">ესპანურის ფილოლოგია</option>
            <option value="3">სამართალი</option>
        </select>
        <label for="score">ქულა</label>
        <input type="number" name="score" id="score" placeholder="მიუთითეთ ქულა" required>

        <button>გაგზავნა</button>
    </form>
</body>

</html>
