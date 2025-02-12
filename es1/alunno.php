<?php
    class Alunno {
    protected $nome;
    protected $cognome;
    protected $eta;
    

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

    public function stampaAlunno() {
        echo "{$this->nome} {$this->cognome}, {$this->eta} anni. <br>";
    }
}
?>