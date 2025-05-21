<?php
// include dos arquivos
include_once '../include/logado.php';
include_once '../include/conexao.php';


$acao = $_REQUEST['acao']?? '';
switch ($acao) {
    case 'salvar':
        $Nome = $_POST['Nome'];
        $Andar = $_POST['Andar'];
        $Cor = $_POST['Cor'];

        $sql = "INSERT INTO setor (Nome, Andar, Cor) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sis', $Nome, $Andar, $Cor);
        $stmt->execute();
        $stmt->close();

        header('Location: ../lista-setores.php');
        exit();
        break;

    default:

        break;

}
?>