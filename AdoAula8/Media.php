<?php

abstract class Media {

    private $nota1;
    private $nota2;
    private $aluno;


    function __construct($nota1, $nota2, $aluno){
        
        $this->$nota1 = $nota1;
        $this->$nota2 = $nota2;
        $this->$aluno = $aluno;
    }

    abstract public function mediaGeometrica();
    
    abstract public function mediaAritmetica();

    public function mostrar(){
        echo "Geométrica" . $this->$nota1 ;
        echo "Aritmética" . $this->$nota2 ;
        echo "Aluno" . $this->$aluno ;
    }

}
