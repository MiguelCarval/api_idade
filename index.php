<?php

require_once("verificar_idade.php");

header("Content-Type:application/json");

$data = json_decode(file_get_contents('php://input'), true);


if(!isset($data['ano']) || !is_numeric($data['ano'])){
    http_response_code(400);
    echo json_encode(["Erro" => "Ano de nascimento obrigatório"]);
    exit;
}

$ano = date("Y");
$dados = (int)$data['ano'];



if($dados > $ano || $dados < 1900){
    http_response_code(400);
    echo json_encode(["Erro" => "Intervalo de tempo invalido"]);
    exit;
}


echo json_encode(
    [ 
        "Ano de nascimento:" => "$dados",
        "idade" => verificarIdade($dados)
    
    ]
);





?>