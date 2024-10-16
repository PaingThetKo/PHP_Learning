<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        h1{
           background-color: grey; 
           padding: 2em;
           text-align: center;
        }
    </style>
<body>
    <ul>
        <?php
            foreach ($animals as $animal){
                echo "<li>$animal</li>";
            }
        ?>
    </ul>
</body>
</html>