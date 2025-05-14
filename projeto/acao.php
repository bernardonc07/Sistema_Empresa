<?php

$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch ($acao) {
    case 'excluir':
        exit('Aqui vc coloca o código de DELETE');
        break;
        case 'salvar':
            if (isset($id) && !empty($id) && is_numeric($id)){
                exit('aqui vc faz o UPDATE');
            }else{
                    exit('Aqui vc faz INSERT');
                }
            # code...
            break;
    default:
        # code...
        break;

}
?>