<?php
        header("Content-Type: application/json");
        require_once "./Animale.php";
        require_once "./Cane.php";

        $animale = new Animale();
        $cane = new Cane();

        echo json_encode($cane);
?>