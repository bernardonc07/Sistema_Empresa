<?php
// include dos arquivos
include_once '../include/logado.php';
include_once '../include/conexao.php';


$acao = $_REQUEST['acao']?? '';
switch ($acao) {
    case 'salvar':
        $Nome = $_POST['Nome'];
        $Data = $_POST['DataNascimento'];
        $Email = $_POST['Email'];
        $Salario = $_POST['Salario'];
        $Sexo = $_POST['Sexo'];
        $CPF = $_POST['CPF'];
        $RG = $_POST['RG'];
        $Cargo = $_POST['Cargo'];
        $Setor = $_POST['Setor']

        $sql = "INSERT INTO funcionarios (Nome, DataNascimento, Email, Salario, Sexo, CPF, RG, Cargo, Setor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sis', $Nome, $Data, $Email, $Salario, $Sexo, $CPF, $RG, $Cargo, $Setor);
        $stmt->execute();
        $stmt->close();

        header('Location: ../lista-funcionarios.php');
        exit();
        break;

    default:

        break;

}
?>