<?php
    class Alunno implements JsonSerializable{
    protected $nome;
    protected $cognome;
    protected $eta;
    
    public function jsonSerialize(): array{
        return [
            'name' => $this->nome,
            'surname' => $this->cognome,
            'age' => $this->eta
        ];
    }
    

    function __construct($nome, $cognome, $eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    function get_nome() {
        return $this->nome;
    }

    function get_cognome() {
        return $this->cognome;
    }

    function get_eta() {
        return $this->eta;
    }

    function set_nome() {
        $this->nome;
    }

    function set_cognome() {
        $this->cognome;
    }

    function set_eta() {
        $this->eta;
    }
}
?>