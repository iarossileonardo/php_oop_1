<?php
    require_once "./Persona.php";

    class Studente extends Persona {
        private $matricola;

        function __construct($nome, $cognome, $matricola) {
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->matricola = $matricola;
        }

        function presentazione() {
            echo "ciao mi chiamo {$this->nome} {$this->cognome}, matricola: {$this->matricola}<br>";
        }
    }
?>