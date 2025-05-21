<?php
// include dos arquivos
include_once   '../include/logado.php';
include_once   '../include/conexao.php';


$acao = $_REQUEST['acao']?? '';
switch ($acao) {
    case 'salvar':
        $Nome = $_POST['Nome'];
        $Preco = $_POST['Preco'];
        $Peso = $_POST['Peso'];
        $Descricao = $_POST['Descricao'];
        $Cargo = $_POST['Cargo'];

        $sql = "INSERT INTO produtos (Nome, Preco, Peso, Descricao, Cargo) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sddss', $Nome, $Preco, $Peso, $Descricao, $Cargo);
        $stmt->execute();
        $stmt->close();

        header('Location: ../lista-produtos.php');
        exit();
        break;

    default:

        break;

}
?>