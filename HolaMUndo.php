<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP page</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>What is the current time and date?</p>
    <p>Your current time and date is:
        <?php
        echo data("d.m.Y H:i:s");
        ?>.</p>
</body>
</html>