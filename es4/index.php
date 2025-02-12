<?php
        header("Content-Type: application/json");
        require_once "./Persona.php";
        require_once "./Studente.php";

        $persona = new Persona("Marco", "Rossi");
        $studente = new Studente("Marco", "Iarossi", "MRR06");

        $array1 = [];

        array_push($array1, $persona);
        array_push($array1, $studente);

        echo json_encode($array1);
?>