<?php
    header("Content-Type: application/json");

        require_once "./alunno.php";
        /*
        $alunni = [];
        array_push($alunni, new Alunno("Leonardo", "Iarossi", 18));
        array_push($alunni, new Alunno("Francesco", "Bianchi", 15));
        array_push($alunni, new Alunno("Tommaso", "Dell'Osa", 3));
        array_push($alunni, new Alunno("Pippo", "Baudo", 118));

        echo json_encode($alunni);
        */

        //deserializzazione
        $alunni_serializzati = file_get_contents("alunni.json");
        $alunni2 = json_decode($alunni_serializzati, true);
        $alunni_nuovi=[];
        foreach($alunni2 as $alunno){
            $alunno_nuovo = new Alunno($alunno["name"], $alunno["surname"], $alunno["age"]);
            array_push($alunni_nuovi, $alunno_nuovo);
        }
        echo json_encode($alunni_nuovi);
    ?>
