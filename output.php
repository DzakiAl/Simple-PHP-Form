<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php
    echo $_GET["name"];
    echo $_GET["birth"];
    echo $_GET["address"];
    echo $_GET["origin"];
    ?>
</body>
</html>