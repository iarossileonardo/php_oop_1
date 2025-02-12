<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "./Automobile.php";
        $automobile = new Automobile("Ford", 2005, "Mustang");

        echo "{$automobile->get_marca()}, {$automobile->get_anno()}, {$automobile->get_modello()}";
    ?>
</body>
</html>