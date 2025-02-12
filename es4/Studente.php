<?php
    require_once "./Persona.php";

    class Studente extends Persona implements JsonSerializable{
        private $matricola;

        function __construct($nome, $cognome, $matricola) {
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->matricola = $matricola;
        }

        public function jsonSerialize(): array {
            return [
                'name' => $this->nome,
                'surname' => $this->cognome,
                'matricols' => $this->matricola
            ];
        }

        function presentazione() {
            echo "ciao mi chiamo {$this->nome} {$this->cognome}, matricola: {$this->matricola}<br>";
        }
    }
?>