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
    <h1>
        <?= "Hello ". htmlspecialchars($_GET['name']); ?>
     </h1>
</body>
</html>