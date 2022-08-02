<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Thank you <?=$_POST["name"];?></h2>
    <br>
    <p>This is your greeting: <strong><?= strtoupper($_POST["greeting"]); ?></strong></p>
</body>
</html>