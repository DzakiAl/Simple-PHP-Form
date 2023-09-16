<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body align="center">
    <h1>Welcome</h1>
    <?php
    echo "Your name is ";
    echo $_GET["name"];
    echo ", your birth is ";
    echo $_GET["birth"];
    echo ", your address is ";
    echo $_GET["address"];
    echo ", your origin is ";
    echo $_GET["origin"]
    ?>
</body>
</html>