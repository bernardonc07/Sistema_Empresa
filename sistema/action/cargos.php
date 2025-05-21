<?php
// Inclusão dos arquivos necessários
include_once '../include/logado.php';
include_once '../include/conexao.php';

$acao = $_REQUEST['acao'] ?? '';

switch ($acao) {
    case 'salvar':
        $Nome = $_POST['Nome'];
        $TetoSalarial = $_POST['TetoSalarial'];

        $sql = "INSERT INTO cargos (Nome, TetoSalarial) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sd', $Nome, $TetoSalarial);
        $stmt->execute();
        $stmt->close();

        header('Location: ../lista-cargos.php');
        exit();
        break;

    case 'excluir':
        $CargoID = $_GET['CargoID'] ?? null;

        if ($CargoID) {
            // Preparar e executar a exclusão
            $sql = "DELETE FROM cargos WHERE CargoID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $CargoID);
            $stmt->execute();
            $stmt->close();
        }

        header('Location: ../lista-cargos.php');
        exit();
        break;

    default:
        break;
}
?>
