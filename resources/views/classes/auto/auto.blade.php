<?php
    class Auto {
        public $nome;
        public $colore;
        public $cilindrata;
        public $potenza;
        public $misura_ruote;
        public $tipologia;
        public $kmLitro;

        public $ultima_revisione = "2018-01-01";

        function __construct($nome, $colore, $cilindrata, $potenza, $misura_ruote, $tipologia, $kmLitro) {
            $this->nome = $nome;
            $this->colore = $colore;
            $this->cilindrata = $cilindrata;
            $this->potenza = $potenza;
            $this->misura_ruote = $misura_ruote;
            $this->tipologia = $tipologia;
            $this->kmLitro = $kmLitro;
        }

        function revisione($ultima_revisione) {
            return $ultima_revisione;
        }

        function totaleKmLitro($litri) {
            return $this->kmLitro * $litri;
        }

    }
