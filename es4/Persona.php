<?php
    class Persona {
        private $nome;
        private $cognome;

        function __construct($nome, $cognome) {
            $this->nome = $nome;
            $this->cognome = $cognome;
        }

        function presentazione() {
            echo "ciao mi chiamo {$this->nome} {$this->cognome}<br>";
        }
    }
?>