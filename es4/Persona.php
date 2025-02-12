<?php
    class Persona implements JsonSerializable{
        private $nome;
        private $cognome;

        function __construct($nome, $cognome) {
            $this->nome = $nome;
            $this->cognome = $cognome;
        }

        public function jsonSerialize(): array {
            return [
                'name' => $this->nome,
                'surname' => $this->cognome
            ];
        }

        function presentazione() {
            echo "ciao mi chiamo {$this->nome} {$this->cognome}<br>";
        }
    }
?>