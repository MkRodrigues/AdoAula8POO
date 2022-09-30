<?php 

require_once("Media.php");

class MediaAritmetica extends Media {
    
    private $nota1; 
    private $nota2; 
    private $aluno;

    function __construct($nota1, $nota2, $aluno){

        parent::__construct($nota1, $nota2, $aluno);

    }

    public function mediaAritmetica(){
    
        return ($this->nota1 * $this->nota2) /2;
    }

}
