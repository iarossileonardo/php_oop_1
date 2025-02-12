<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista alunni</h1>
    <?php
        require_once "./alunno.php";
        $alunni = [];
        array_push($alunni, new Alunno("Leonardo", "Iarossi", 18));
        array_push($alunni, new Alunno("Francesco", "Bianchi", 15));
        array_push($alunni, new Alunno("Tommaso", "Dell'Osa", 3));
        array_push($alunni, new Alunno("Pippo", "Baudo", 118));

        foreach ($alunni as $alunno) {
            $alunno->stampaAlunno();
        }
    ?>
</body>
</html>