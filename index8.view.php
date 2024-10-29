<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Task title is : <?= $task['title'];?></li>
        <li>Task due date is : <?= $task['due'] ?></li>
        <li>Task is : 
            <?php
                echo $task['complete'] ? "Complete" : "Incomplete"
            ?>
        </li>
    </ul>
</body>
</html>