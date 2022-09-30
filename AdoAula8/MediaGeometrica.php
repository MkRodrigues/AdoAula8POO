<?php

require_once("Media.php");

class MediaGeometrica extends Media {

    private $nota1; 
    private $nota2; 
    private $aluno;

    function __construct($nota1, $nota2, $aluno){

        parent::__construct($nota1, $nota2, $aluno);
    }

    public function mediaGeometrica(){
        
        return sqrt($this->$nota1 * $this->$nota2);
    }

}