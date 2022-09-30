<?php

// require_once("Media.php");
require_once("MediaGeometrica.php");
require_once("MediaAritmetica.php");



$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$aluno = $_POST['nomeAluno'];

$mGeo = new MediaGeometrica($nota1, $nota2, $aluno);
$mAri = new MediaAritmetica($nota1, $nota2, $aluno);
