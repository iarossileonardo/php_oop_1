<?php
        header("Content-Type: application/json");
        require_once "./Automobile.php";
        $automobile = new Automobile("Ford", 2005, "Mustang");

        echo json_encode($automobile);
?>