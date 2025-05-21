<?php
// Inclusão dos arquivos necessários
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>



<main>
    <div id="cargos" class="tela">
        <form class="crud-form" action="./action/cargos.php" method="post">
            <h2>Cadastro de Cargos</h2>

            <input type="hidden" name="acao" value="salvar">

            <input type="text" name="Nome" placeholder="Nome do Cargo" required>
            
            <input type="number" name="TetoSalarial" step="0.01" placeholder="Teto Salarial" required>

            <button type="submit">Salvar</button>
        </form>
    </div>
</main>

<?php
// Rodapé da página
include_once './include/footer.php';
?>
