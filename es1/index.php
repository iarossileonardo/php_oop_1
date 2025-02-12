<?php
    header("Content-Type: application/json");

        require_once "./alunno.php";
        $alunni = [];
        array_push($alunni, new Alunno("Leonardo", "Iarossi", 18));
        array_push($alunni, new Alunno("Francesco", "Bianchi", 15));
        array_push($alunni, new Alunno("Tommaso", "Dell'Osa", 3));
        array_push($alunni, new Alunno("Pippo", "Baudo", 118));

        echo json_encode($alunni);
    ?>
