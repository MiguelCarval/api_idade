<?php

function verificarIdade($anoNascimento){

$anoAtual = date("Y");
$idade = $anoAtual - $anoNascimento;

return $idade;


}





?>