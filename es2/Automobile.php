<?php

    require_once "./Veicolo.php";

    class Automobile extends Veicolo {
        private $modello;

        function __construct($marca, $anno, $modello) {
            $this->marca = $marca;
            $this->anno = $anno;
            $this->modello = $modello;
        }

        function get_marca() {
            return $this->marca;
        }

        function get_anno() {
            return $this->anno;
        }

        function get_modello() {
            return $this->modello;
        }
    }
?>