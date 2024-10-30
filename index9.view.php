<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Person name is <?= $personBio['name']; ?></li>
        <li>Person age is <?= $personBio['age']; ?></li>
        <li>Person is 
            <?php
                echo $personBio['isMarried'] ? "is Married." : "is not Married."
            ?>
        </li>
    </ul>
</body>
</html>