<?php
// include dos arquivos
include_once   '../include/logado.php';
include_once   '../include/conexao.php';


$acao = $_REQUEST['acao']?? '';
switch ($acao) {
    case 'salvar':
        $Nome = $_POST['Nome'];
        $Descricao = $_POST['Descricao'];

        $sql = "INSERT INTO categorias (Nome, Descricao) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $Nome, $Descricao);
        $stmt->execute();
        $stmt->close();

        header('Location: ../lista-categorias.php');
        exit();
        break;

    default:

        break;

}
?>